<?php

// src/Sportimimi/userBundle/Controller/ProfileController.php

namespace Sportimimi\userBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\UserBundle\Mailer\Mailer;
use FOS\UserBundle\Util\TokenGenerator;
use FacebookSDK\Facebook;
use \DateTime;
use Doctrine\ORM\Query\ResultSetMapping;
// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Place;
use Sportimimi\userBundle\Entity\Category;
use Sportimimi\userBundle\Entity\Country;
use Sportimimi\userBundle\Entity\Image;
//use Sportimimi\userBundle\Entity\Group;
use Sportimimi\userBundle\Entity\User;
use Sportimimi\userBundle\Entity\Notification;
// Add Forms
use Sportimimi\userBundle\Form\ProfileForm;
use Sportimimi\userBundle\Form\SearchProfile;
use Sportimimi\userBundle\Form\IdentityPictureType;
use Sportimimi\userBundle\Form\updateProfileForm;

class ProfileController extends Controller {

    protected $token;

    //List of profile

    public function logUser($user) {
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles()); // 'main' is the name of the firewall
        $this->container->get('security.context')->setToken($token);
    }

    public function listAction(Request $request) {
        $em = $this->container->get('doctrine')->getManager();
        $profile = $em->getRepository('SportimimiuserBundle:Profile')->findAll();
        $teams = $em->getRepository('SportimimiuserBundle:Team')->findAll();
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $form = $this->container->get('form.factory')->create(new SearchProfile());

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $data = $form->getData();

            // This part need to be change.. but it's working..
            $repository = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Profile');
            // Custom query
            $query = $repository->createQueryBuilder('p');

            if (isset($_GET['sport'])) {

                $sql = 'SELECT p, c FROM SportimimiuserBundle:Profile p
				JOIN p.sports c WHERE c.id = ' . $_GET['sport'];
                $i = 0;
                /*
                  foreach ($_GET['sport'] as $field => $value) {

                  if ($i == 0)
                  $sql.=" WHERE c.id = " . $value;
                  else
                  $sql.=" OR c.id = " . $value;

                  $i++;
                  }

                 */
                //echo $sql;
                $query = $em->createQuery($sql);
                $profile = $query->getResult();
            }
        }
        //SINGLE 
        if (isset($_GET['sport'])) {

            $sql = 'SELECT p, c FROM SportimimiuserBundle:Profile p
				JOIN p.sports c WHERE c.id = ' . $_GET['sport'];
            $i = 0;

            $query = $em->createQuery($sql);
            $profile = $query->getResult();
        }
        $results = count($profile);
        // FIN SINGLE FILTER
        $category = $em->getRepository('SportimimiuserBundle:Category')->findAll();


        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:listProfile.html.twig', array(
                    'profile' => $profile,
                    'teams' => $teams,
                    'categories' => $category,
                    'numberProfile' => $results,
                    'user' => $user,
                    'form' => $form->createView()
                        )
        );
    }

    //List of profile By category
    public function listByCategoryAction($id = null) {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        //number of result
        $results = count($profile);
        $category = $em->getRepository('SportimimiuserBundle:Category')->findAll();
        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:listProfile.html.twig', array(
                    'profile' => $profile,
                    'category' => $category,
                    'numberProfile' => $results,
                    'user' => $user
                        )
        );
    }

    //Search for a profile
    public function searchAction(Request $request) {
        $em = $this->container->get('doctrine')->getManager();
        $profile = $em->getRepository('SportimimiuserBundle:Profile')->findAll();

        //Current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $results = count($profile);
        $message = '';
        $category = $em->getRepository('SportimimiuserBundle:Category')->findAll();
        $form = $this->container->get('form.factory')->create(new SearchProfile());

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $data = $form->getData();

            // This part need to be change.. but it's working..
            $repository = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Profile');
            $query = $repository->createQueryBuilder('p');
            foreach ($data as $field => $value) {
                /* if (!$repository->getClassMetadata()->hasField($field)) {
                  // Make sure we only use existing fields (avoid any injection)
                  continue;
                  } */

                if (isset($value))
                    $query->andWhere($query->expr()->eq('p.' . $field, ':p_' . $field))
                            ->setParameter('p_' . $field, $value);
            }
            $profile = $query->getQuery()->getResult();
        }

        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:rechercheProfil.html.twig', array(
                    'form' => $form->createView(),
                    'profile' => $profile,
                    'user' => $user,
        ));
    }
    
    //Register a profile
    public function addAction() {

        $message = '';
        $profile = new Profile();
        $user = new User();

        $form = $this->container->get('form.factory')->create(new ProfileForm(), $profile);
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Country');
        $vietnam = $repository->findOneById(239);
        $form->get('country')->setData($vietnam);
        //Database save
        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            if ($form->isValid()) {
                //For completion number of profile
                $completionNumber = 10; //number of field we have
                $i = 0;
                foreach ($_POST['profile'] as $k => $v) {
                    if ($v == '')
                        $i++;
                }
                /* print_r($_POST['profile']);
                  die; */
                $email = $form["email"]->getData();
                $pass = $form["password"]->getData();
                $user->setEmail($email);
                $user->setUsername($email);
                $user->setPlainPassword($pass);
                //disable account
                $user->setEnabled(false);
                // set Confirmation token
                $tokenGenerator = new TokenGenerator;
                $user->setConfirmationToken($tokenGenerator->generateToken());
                // send Confirmation mail
                $mailer = new Mailer($this->get('mailer'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'SportimimiuserBundle:Page:email.txt.twig',
                    'from_email' => array('confirmation' => 'info@teamsport.vn'))
                );

                $mailer->sendConfirmationEmailMessage($user);

                $user->setProfile($profile);
                $profile->setUser($user);
                $em = $this->container->get('doctrine')->getManager();
                //Notificate him
                $notification = new Notification();

                $notification->setMessage('Welcome to TeamSport!');

                $profile->addNotifications($notification);
                $notification->setProfile($profile);
                $em->persist($notification);
                $em->persist($profile);
                $em->persist($user);
                $em->flush();

                //Auto-login
                //$this->_authenticateAccount($user);
                //$id=$profile->getId();
                //return $this->redirect($this->generateUrl('PhotoProfile', array('id'=>$id), 301));


                $_SESSION['id'] = $user->getId();

                return $this->redirect($this->generateUrl('AddProfileStep2'), 301);
            }
        }



        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:addProfile.html.twig', array(
                    'form' => $form->createView(),
                    'message' => $message,
                    'user' => $user
        ));
    }

    public function addStep2Action() {

        /* //User logged on
          $user = $this->get('security.context')->getToken()->getUser();
          if($user!='anon.' )// Check user is not anonyme
          $user = $user->getProfile(); */

        //take user just have been created
        $repository2 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:User');
        $user = $repository2->findOneById($_SESSION['id']);
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->container->get('doctrine')->getManager();
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Place');
        $places = $repository->findAll();
        //Database save
        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {

            if ($_POST['new_name_place'] != '' && $_POST['new_adress_place'] != '' ) {

                $name = $_POST['new_name_place'];
                $address = $_POST['new_adress_place'];
                //Create a new place
                $place = new Place();
                $place->setPlaceName($name);
                $place->setAddress($address);
                $em->persist($place);
                $em->flush();
            } else if (isset($_POST['placeSelected']) && $_POST['placeSelected'] != '') {

                foreach ($_POST["placeSelected"] as $value) {
					if ($value!='' && $value!=null)
					{
	                    $place_add = $repository->findOneByPlaceName($value);
	                    if ($place_add!=null)
	                    {
		                    $user->addPlace($place_add); // this not work
		                    $place_add->addProfile($user);
		                    $em->persist($user);
		                    $em->persist($place_add);
		                    $em->flush();
	                    }
                    }
                }
            }


            //if (!isset($_SESSION['fb']) && $_SESSION['fb']!= 1)
            //return $this->redirect($this->generateUrl('RegistrationComplete'), 301);
            $this->logUser($user->getUser());
            return $this->redirect('https://teamsport.vn', 301);
        }
        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:addProfileStep2.html.twig', array(
                    'user' => $user,
                    'places' => $places
        ));
    }

    public function detailAction($id = null) {
        //Current user;
        $user = $this->get('security.context')->getToken()->getUser();
        $session = $this->getRequest()->getSession();
        if ($user != 'anon.') {
            $response = new Response();
            $response->headers->clearCookie('userid');

            $session->set('chat_username', $user->getProfile()->getNom());

            // We create a new cookie
            $cookie = new Cookie('userid', $user->getProfile()->getId(), time() + 3600 * 24 * 7);
            // we implement a new response object (be careful! One response object per query!)

            $response = new Response();
            // and we pass it the cookie we have created
            $response->headers->setCookie($cookie);

            // we retrieve the request object and the value of our cookie
            $request = $this->get('request');
            $value = $request->cookies->get('userid');
            $response->send();
        }
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $em = $this->container->get('doctrine')->getManager();
        if (isset($_GET['id']))
            $id = $_GET['id'];
        if (isset($id)) {
            // Detail d'un sportif existant : on recherche ses données
            $profile = $em->find('SportimimiuserBundle:Profile', $id);

            if (!$profile) {
                $message = 'Aucun profil trouvé';
            }
        } else {
            if ($user != 'anon.')// Check user is not anonyme
                $profile = $user;
            else
                return $this->redirect('/');
        }

        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:detailProfile.html.twig', array(
                    'profile' => $profile,
                    'user' => $user
        ));
    }

    public function deleteAction($id = null) {

        $em = $this->container->get('doctrine')->getManager();

        if (isset($id)) {
            // Detail d'un sportif existant : on recherche ses données
            $profile = $em->find('SportimimiuserBundle:Profile', $id);

            if (!$profile) {
                $message = 'Aucun profil trouvé';
            } else {

                $em->remove($profile);
                $em->flush();
                $message = 'profil supprimé';
            }
        }
        return $this->redirect($this->generateUrl('ListProfile'));
    }

    public function uploadAction($id = null) {
        $message = '';
        $image = new Image();
        $image2 = new Image();
        //Get profile
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Profile');
        $idProfile = $_GET['id'];
        $profile = $repository->findOneById($idProfile);

        $form = $this->container->get('form.factory')->create(new IdentityPictureType(), $image);
        $form2 = $this->container->get('form.factory')->create(new IdentityPictureType(), $image2);
        //Database save
        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // Puis, le reste de la méthode, qu'on avait déjà fait
                $em = $this->getDoctrine()->getManager();
                $image->setType('video');
                $image->setProfile($profile);
                $em->persist($image);
                $em->flush();
                $message = 'Sauvegarde de votre image!';


                return $this->container->get('templating')->renderResponse(
                                'SportimimiuserBundle:Profile:detailProfile.html.twig', array(
                            'profile' => $profile,
                            'user' => $profile
                ));
            }
            $form2->handleRequest($request);

            if ($form2->isValid()) {
                // Puis, le reste de la méthode, qu'on avait déjà fait
                $em = $this->getDoctrine()->getManager();
                $image2->setProfile($profile);
                $image2->setType('image');
                $em->persist($image2);
                $em->flush();
                $message = 'Sauvegarde de votre image!';

                return $this->container->get('templating')->renderResponse(
                                'SportimimiuserBundle:Profile:detailProfile.html.twig', array(
                            'profile' => $profile,
                            'user' => $profile
                ));
            }
        }



        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:upload.html.twig', array(
                    'form' => $form->createView(),
                    'form2' => $form->createView(),
                    'message' => $message,
                    'user' => $profile
        ));
    }

    //Function return events of the profile
    public function listEventAction() {
        //Current user
        $user = $this->get('security.context')->getToken()->getUser();
        $profile = $user->getProfile();
        //get events of this profile
        $events = $profile->getEvents();

        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:listEvent.html.twig', array(
                    'events' => $events,
                    'user' => $user
        ));
    }

    /**
     * Automatic post-registration user authentication

      protected function _authenticateAccount(User $account)
      {
      $token = new UsernamePasswordToken($account, null, 'account_area', $account->getRoles());
      $this->get('security.context')->setToken($token);
      } */
    // UPDATE PROFILE 
    public function updateAction() {
        //Current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $id = $user->getId();
        $request = $this->get('request');

        $form = $this->createForm(new updateProfileForm(), $user);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                // is not needed as the bind function will bind data directly to the entity passed to the form.
                //$profile = $form->getData();
                //$em->persist($profile); 
                $em->flush();

                return $this->redirect($this->generateUrl('DetailProfile', array('id' => $id), 301));
            }
        }

        return $this->render('SportimimiuserBundle:Profile:updateProfile.html.twig', array(
                    'form' => $form->createView(),
                    'user' => $user
        ));
    }

    public function facebookLoginAction() {
        $em = $this->container->get('doctrine')->getManager();
        $created = 0;

        $facebook = $this->get('facebook');
        if ($facebookId = $facebook->getUser()) {
            $userProfile = $facebook->api('/me?scope=email');
            // do whatever you want with it.
            //print_r( $userProfile);die;
            //Check if user has already a account

            $profile = $em->getRepository('SportimimiuserBundle:Profile')->findOneByEmail($userProfile['email']);
            if ($profile != null) {

                $this->logUser($profile->getUser());
            } else {

                $profile = new Profile();
                $user = new User();
                $user->setEmail($userProfile['email']);
                $user->setUsername($userProfile['email']);
                $user->setPlainPassword('123456');
                //disable account
                $user->setEnabled(true);
                /* // set Confirmation token
                  $tokenGenerator = new TokenGenerator;
                  $user->setConfirmationToken($tokenGenerator->generateToken());
                  // send Confirmation mail
                  $mailer = new Mailer($this->get('mailer'),$this->get('router'),$this->get('templating'),
                  array('confirmation.template'=> 'SportimimiuserBundle:Page:email.txt.twig',
                  'from_email' => array('confirmation' => 'info@teamsport.vn'))
                  ); */

                //$mailer->sendConfirmationEmailMessage($user);

                $user->setProfile($profile);
                $profile->setUser($user);

                $profile->setEmail($userProfile['email']);
                $profile->setPrenom($userProfile['first_name']);
                $profile->setNom($userProfile['last_name']);
                if (isset($userProfile['birthday'])) {
                    $dateN = new DateTime($userProfile['birthday']);
                    $profile->setDateNaissance(new \DateTime(date_format($dateN, 'Y-m-d')));
                }
                if ($profile->setSexe($userProfile['gender'] == 'Male'))
                    $profile->setDateNaissance('M');
                else if ($profile->setSexe($userProfile['gender'] == 'Female'))
                    $profile->setDateNaissance('F');

                //Notificate him
                $notification = new Notification();

                $notification->setMessage('Welcome to TeamSport!');

                $profile->addNotifications($notification);
                $notification->setProfile($profile);
                $em->persist($notification);
                $em->persist($profile);
                $em->persist($user);
                $em->flush();

                $_SESSION['id'] = $user->getId();
                $_SESSION['fb'] = '1';
                return $this->redirect($this->generateUrl('AddProfileStep2'), 301);
            }
        } else {
            // not authenticated.
            return $this->redirect($facebook->getLoginUrl(array('req_perms' => 'email', 'redirect_uri' => 'http://teamsport.vn')));
        }

        if ($userProfile) {
            // Get logout URL
            $logoutUrl = $facebook->getLogoutUrl();
        } else {
            // Get login URL
            $loginUrl = $facebook->getLoginUrl(array(
                'scope' => 'email, read_stream, publish_stream, user_birthday, user_location, user_work_history, user_hometown, user_photos',
            ));
        }
        //echo "<a href='$logoutUrl'>log out</a>";
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        return $this->redirect($this->generateUrl('homepage'), 301);
    }

    //Function to send notification to play
    public function invitePlayAction() {

        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        //Get profile
        $idProfileInvite = $_POST['idProfileInvite'];
        $timePlay = $_POST['timePlay'];
        $placePlay = $_POST['placePlay'];
        $repository2 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Profile');
        $profile = $repository2->findOneById($idProfileInvite);

        if ($request->isXmlHttpRequest()) {
            //Create notifs
            $notification = new Notification();
            $notification->setMessage($user->getNom() . ' ' . $user->getPrenom() . ' muốn mời bạn tham gia chơi cùng!<br>Thời gian:' . $timePlay . "<br>Địa điểm:" . $placePlay);

            $profile->addNotifications($notification);
            $notification->setProfile($profile);
            $em->persist($notification);
            $em->persist($profile);
            $em->persist($user);
            $em->flush();
			// send email to the player..
			$message = \Swift_Message::newInstance()
				->setSubject('Teamsport: '.$user->getPrenom().' '.$user->getNom().' muốn chơi với bạn')
				->setFrom(array('admin@teamsport.vn' => 'Teamsport.vn'))
				->setTo($profile->getUser()->getEmail())
				->setContentType("text/html")
				->setBody(
					$this->renderView(
					'SportimimiuserBundle:Mail:inviteToPlay.html.twig',
					array('user' => $user,'user2' => $profile,'timePlay' => $timePlay,'placePlay' => $placePlay )
					)
					)
					;
					$this->get('mailer')->send($message);
					$spool = $this->get('mailer')->getTransport()->getSpool();
					$transport = $this->get('swiftmailer.transport.real');
					$spool->flushQueue($transport);

			
			
			
            return new Response('ok', 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
        }
    }

    public function addSportAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Category');
        $sport = $repository->findOneById($_POST['id']);

        $user->addSports($sport);
        $em->persist($user);
        $em->flush($user);

        $referer = $this->getRequest()->headers->get('referer');
        return new RedirectResponse($referer);
    }

    public function setSearchPlayerAction($value = null) {

        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();
        $user->setSearchPlayer($value);
        $em->persist($user);
        $em->flush($user);
        $referer = $this->getRequest()->headers->get('referer');
        return new RedirectResponse($referer);
    }

    // return the place of the profil
    public function myPlaceAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
    }

    //send sms alert.
    public function sendSmsAlertAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $user_api = "maxtor3569"; //client id :GMAM86
        $password = "LNOcKEBRPfTQRW";
        $api_id = "3395416";
        $baseurl = "http://api.clickatell.com";

        $text = urlencode($user->getNom() . " Wants to Play with you.
		------<br />
		Teamsport.vn
		");
        $to = "+841669221797";

        // auth call
        $url = "$baseurl/http/auth?user=$user_api&password=$password&api_id=$api_id";

        // do auth call
        $ret = file($url);

        // explode our response. return string is on first line of the data returned
        $sess = explode(":", $ret[0]);
        if ($sess[0] == "OK") {

            $sess_id = trim($sess[1]); // remove any whitespace
            $url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$to&text=$text";

            // do sendmsg call
            $ret = file($url);
            $send = explode(":", $ret[0]);

            if ($send[0] == "ID") {
                echo "successnmessage ID: " . $send[1];
            } else {
                echo "send message failed";
            }
        } else {
            echo "Authentication failure: " . $ret[0];
        }
    }

    public function profileListJsonAction() {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM SportimimiuserBundle:Profile p');
        $result = $query->getArrayResult();

        return new Response(json_encode($result), 200);
    }

    public function sportsListJsonAction() {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM SportimimiuserBundle:Category p');
        $result = $query->getArrayResult();

        return new Response(json_encode($result), 200);
    }
    
    public function getAllProfileOnlineAction()
    {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();        
            // Custom query
            $rsm = new ResultSetMapping();
            $rsm->addEntityResult('Sportimimi\userBundle\Entity\User', 'u');
            $rsm->addFieldResult('u', 'id', 'id');
            $rsm->addFieldResult('u', 'lastActive', 'lastActive');
            $now = date("Y-m-d H:i:s");
            $sql = 'SELECT u.id,u.lastActive FROM fos_user u HAVING TIMESTAMPDIFF(MINUTE,u.lastActive,NOW()) < 1';
            $query = $em->createNativeQuery($sql,$rsm);
            $result = $query->getResult();
            // render again the controller  
            $answer['html'] = $this->forward('SportimimiuserBundle:Page:baseRight', array('profileOnlinePass' => $result))->getContent(); 
            $response = new Response();                                                
            $response->headers->set('Content-type', 'application/json; charset=utf-8');
            $response->setContent(json_encode($answer));
            return $response;
            // End render controller
            /*   
            $result = $query->getArrayResult();
            return new Response(json_encode($result), 200);
            */
       }
    }
}
