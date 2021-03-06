<?php

// src/Sportimimi/userBundle/Controller/ProfileController.php

namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Util\Codes;
use Sportimimi\AdminBundle\Form\ProfileAdminType;
use Sportimimi\userBundle\Entity\UserRating;
use Sportimimi\userBundle\Form\UserCommentType;
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
use \DateTime;
use Doctrine\ORM\Query\ResultSetMapping;
// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\UserComment;

use Sportimimi\userBundle\Entity\Place;
use Sportimimi\userBundle\Entity\Category;
use Sportimimi\userBundle\Entity\Country;
use Sportimimi\userBundle\Entity\Image;
use Sportimimi\userBundle\Entity\User;
use Sportimimi\userBundle\Entity\Notification;
// Add Forms
use Sportimimi\userBundle\Form\ProfileForm;
use Sportimimi\userBundle\Form\SearchProfile;
use Sportimimi\userBundle\Form\IdentityPictureType;
use Sportimimi\userBundle\Form\updateProfileForm;

class ProfileController extends Controller
{

    protected $token;

    public function listCommentsAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') { // Check user is not anonyme
            $userComments = $user->getProfile()->getUserComments();
        }
        $profile = $user->getProfile();

        $form = $this->container->get('form.factory')->create(new \Sportimimi\userBundle\Form\UserCommentType());


        return $this->render('SportimimiuserBundle:Profile:listComments.html.twig', array(
            'userComments' => $userComments,
            'user' => $profile,
            'form' => $form->createView(),
        ));
    }

    public function addUserCommentAction(Request $request)
    {
        // change the $USER
        $user = $this->getUser();
        $comment = new UserComment();
        $comment->setContent($_POST['user_comment']['content']);
        $comment->setRate(new UserRating());
        $comment->getRate()->setRate($_POST['user_comment']['rate']['rate']);

        $postedProfile = $this->getDoctrine()->getRepository('SportimimiuserBundle:Profile')->find($request->get('id'));
        $comment->setPostedBy($user->getProfile());
        $comment->setProfile($postedProfile);
		$email = $postedProfile->getUser()->getEmail();
		
		$message = \Swift_Message::newInstance()
            ->setSubject('Teamsport: ' . $user->getProfile()->getPrenom() . ' ' . $user->getProfile()->getNom() . ' nhận xét về bạn')
            ->setFrom(array('admin@teamsport.vn' => 'Teamsport.vn'))
            ->setTo($email)
            ->setContentType("text/html")
            ->setBody(
                $this->renderView(
                    'SportimimiuserBundle:Mail:postComment.html.twig', array('user' => $postedProfile, 'user2' => $user->getProfile(),'comment' => $_POST['user_comment']['content'])
                )
            );
            
        $this->get('mailer')->send($message);
        
        $_em = $this->getDoctrine()->getManager();
        $_em->persist($comment);
        $_em->flush();

        return new Response('', Codes::HTTP_CREATED);
    }

    public function listGamesAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->container->get('doctrine')->getManager();
        if ($user != 'anon.') { // Check user is not anonyme
            $news = $user->getProfile()->getNews();
        }

        return $news;

        // return $this->container->get('templating')->renderResponse(
        //     'SportimimiuserBundle:Profile:listGames.html.twig', array('news' => $news));
    }

    public function logUser($user)
    {
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles()); // 'main' is the name of the firewall
        $this->container->get('security.context')->setToken($token);
    }

    public function listAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $profile = $em->getRepository('SportimimiuserBundle:Profile')->findAll();
        $teams = $em->getRepository('SportimimiuserBundle:Team')->findAll();
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
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
    public function listByCategoryAction($id = null)
    {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
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
    public function searchAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $profile = $em->getRepository('SportimimiuserBundle:Profile')->findAll();

        //Current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
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
    public function addAction()
    {

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
                // enable account by default
                $user->setEnabled(true);
//                exit;
//                // set Confirmation token
//                $tokenGenerator = new TokenGenerator;
//                $user->setConfirmationToken($tokenGenerator->generateToken());
//                // send Confirmation mail
//                $mailer = new Mailer($this->get('mailer'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'SportimimiuserBundle:Page:email.txt.twig',
//                    'from_email' => array('confirmation' => 'info@teamsport.vn'))
//                );
//
//                $mailer->sendConfirmationEmailMessage($user);


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

    public function createProfileAction(Request $request)
    {
        $profile = ($this->getUser()->getProfile()) ?: new Profile();
        if (!$profile->getEmail()) $profile->setEmail($this->getUser()->getEmail());
        $form = $this->createForm(new ProfileAdminType(), $profile);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->getUser()->setProfile($profile);
            $this->getDoctrine()->getManager()->flush();
			$this->getUser()->getProfile()->setCompletion(1);
			$this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->generateUrl('AddProfileStep2'));
        }

        return $this->render('@Sportimimiuser/Profile/completeProfile.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function addStep2Action()
    {
        $user = $this->getUser()->getProfile();

        $em = $this->container->get('doctrine')->getManager();
        $repository = $this->getDoctrine()
            ->getRepository('SportimimiuserBundle:Place');
        $places = $repository->findAll();
        //Database save
        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {

            if ($_POST['new_name_place'] != '' && $_POST['new_adress_place'] != '') {

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
                    if ($value != '' && $value != null) {
                        $place_add = $repository->findOneByPlaceName($value);
                        if ($place_add != null) {
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
            return $this->redirect($this->generateUrl('homepage', array("locale" => $request->getLocale())));
        }
        return $this->container->get('templating')->renderResponse(
            'SportimimiuserBundle:Profile:addProfileStep2.html.twig', array(
            'user' => $user,
            'places' => $places
        ));
    }

    public function detailAction($id = null)
    {
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
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();
        $em = $this->container->get('doctrine')->getManager();
//        if (isset($_GET['id']))
//            $id = $_GET['id'];
        if (isset($id)) {
            // Detail d'un sportif existant : on recherche ses données
            $profile = $em->find('SportimimiuserBundle:Profile', $id);
            if (!$profile) {
                $message = 'Aucun profil trouvé';
            }
        } else {
            if ($user != 'anon.') // Check user is not anonyme
                $profile = $user;
            else
                return $this->redirect('/');
        }

        $userRate = $em->getRepository('SportimimiuserBundle:UserRating')->findByProfile($user->getId());
        $rate = 0;

        foreach ($userRate as $oneRate) {
            $rate += $oneRate->getRate();
        }

        $rate     = $rate / count($userRate);
        $rateAnt  = intval($rate);

        if ($rate == $rateAnt)
            $rateMant = 0;
        else
            $rateMant = 1;
        
        $rateArr = array();
        for ($i = 0; $i < 5; $i++){

            if ($i < $rateAnt) {
                $rateArr[$i] = 2;
            }
            elseif ($i == $rateAnt && $rateMant == 1 ) {
                $rateArr[$i] = 1;
            }
            else {
                $rateArr[$i] = 0;
            }
        }

        $news = $this->listGamesAction();
    
        return $this->container->get('templating')->renderResponse(
            'SportimimiuserBundle:Profile:detailProfile.html.twig', array(
            'profile' => $profile,
            'user' => $user,
            'rateArr' => $rateArr,
            'news' => $news
        ));
    }

    public function userRateById($id){
        $rates = $em->getRepository('SportimimiuserBundle:UserRating')->findByProfile($id);
    }


    public function deleteAction($id = null)
    {

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

    public function uploadAction($id = null)
    {
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
    public function listEventAction()
    {
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
     *
     * protected function _authenticateAccount(User $account)
     * {
     * $token = new UsernamePasswordToken($account, null, 'account_area', $account->getRoles());
     * $this->get('security.context')->setToken($token);
     * } */
    // UPDATE PROFILE 
    public function updateAction()
    {
        //Current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
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

    public function facebookLoginAction()
    {
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
                //enable account
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
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        return $this->redirect($this->generateUrl('homepage'), 301);
    }

    //Function to send notification to play
    public function invitePlayAction()
    {

        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
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
                ->setSubject('Teamsport: ' . $user->getPrenom() . ' ' . $user->getNom() . ' muốn chơi với bạn')
                ->setFrom(array('admin@teamsport.vn' => 'Teamsport.vn'))
                ->setTo($profile->getUser()->getEmail())
                ->setContentType("text/html")
                ->setBody(
                    $this->renderView(
                        'SportimimiuserBundle:Mail:inviteToPlay.html.twig', array('user' => $user, 'user2' => $profile, 'timePlay' => $timePlay, 'placePlay' => $placePlay)
                    )
                );
            $this->get('mailer')->send($message);
            $spool = $this->get('mailer')->getTransport()->getSpool();
            $transport = $this->get('swiftmailer.transport.real');
            $spool->flushQueue($transport);


            return new Response('ok', 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
        }
    }

    public function addSportAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $sports = json_decode($_POST['id']);
    
        $em = $this->getDoctrine()->getManager();

        foreach ($sports as $key => $value) {

        $query = $em->createQuery(
            'DELETE
             FROM SportimimiuserBundle:ProfileSports p
             WHERE p.profile_id = :pid'
        )->setParameters(array('pid' => $user->getId()
                                ))->getResult();
        }

        $repository = $this->getDoctrine()
            ->getRepository('SportimimiuserBundle:Category');

        foreach ($sports as $key => $value) {

            $sport = $repository->findOneById($value);

            $user->addSports($sport);
            $em->persist($user);
            $em->flush($user);            
        }

        $referer = $this->getRequest()->headers->get('referer');
        return new RedirectResponse($referer);
    }

    public function rateUserAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();

        $userRate = new UserRating();

        $userRate->setRate($_POST['rate']);
        $userRate->setRatedBy($user->findOneById($_POST['uid']));
        $userRate->setProfile($user->findOneById($_POST['pid']));

        $em->persist($userRate);
        $em->flush($userRate);


        $referer = $this->getRequest()->headers->get('referer');
        return new RedirectResponse($referer);
    }

    public function editProfileAction(){
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();
    //TODO here...
    }

    public function setSearchPlayerAction($value = null)
    {

        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();
        $user->setSearchPlayer($value);
        $em->persist($user);
        $em->flush($user);
        $referer = $this->getRequest()->headers->get('referer');
        return new RedirectResponse($referer);
    }

    // return the place of the profil
    public function myPlaceAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();
    }

    //send sms alert.
    public function sendSmsAlertAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
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

    public function profileListJsonAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM SportimimiuserBundle:Profile p');
        $result = $query->getArrayResult();

        return new Response(json_encode($result), 200);
    }

    public function sportsListJsonAction(Request $request)
    {
        $name = $request->get('q');
        $result = $this->getDoctrine()->getRepository('SportimimiuserBundle:Category')->findLikeName($name);

        return new Response(json_encode($result), 200);
    }

    public function getAllProfileOnlineAction()
    {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
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
            $query = $em->createNativeQuery($sql, $rsm);
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

    // Fast fix for stock user imei
    public function setImeiAction()
    {

        $em = $this->getDoctrine()->getManager();
        $imei = $_GET['imei'];
        $user_id = $_GET['user_id'];

        $repository = $this->getDoctrine()->getRepository('SportimimiuserBundle:User');
        $user = $repository->findOneByEmail($user_id);
        $user->setImei($imei);
        $em->persist($user);
        $em->flush();
        return new Response('IMEI SAVE', 200, array('Content-Type' => 'application/json'));
    }

    public function randUsersAction () {
        
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();

        $friends = $this->getDoctrine()->getRepository('SportimimiuserBundle:Friends')->findBy(array("profile_id" => $user->getId()));

        foreach ($friends as $key => $value) {
            $friends[$key] = $value->getArray();
        }

        $profiles = $this->getDoctrine()->getRepository('SportimimiuserBundle:Profile')->findAll();

        foreach ($profiles as $key => $value) {
            $profiles[$key] = $value->getArrayForRand();
        }

        foreach ($profiles as $key => $value) {
            foreach ($friends as $keyFr => $valueFr) {
                if ($value["id"] == $valueFr["friendProfileId"])
                    unset($profiles[$key]);
            }

        }

        $profiles = array_values($profiles);

        $happy4Friends = array();
        $happy4FriendsIds = array();

        $dql        = "SELECT u.id, u.url FROM SportimimiuserBundle:Image u WHERE u.profile = :senderId";
        $dqlSports  = "SELECT p.category_id FROM SportimimiuserBundle:ProfileSports p WHERE p.profile_id = :profileId"; 
        $dqlName    = "SELECT u.nom,u.prenom FROM SportimimiuserBundle:Profile u WHERE u.id = :profileId";
        for ($i = 0; $i < 3 ; $i++) { 
            $happy4Friends[$i]["id"] = $profiles[rand(0,count($profiles) - 1)]["id"];
            //$happy4Friends[$i]["id"] = 27;
            $happy4FriendsIds[$i] = $happy4Friends[$i]["id"];

            $img = $em->createQuery($dql)
                     ->setParameter('senderId',$happy4Friends[$i]["id"])
                     ->getResult();

            $sports = $em->createQuery($dqlSports)->setParameters(array('profileId' => $happy4Friends[$i]["id"] ))->getResult();
            $nomes = $em->createQuery($dqlName)->setParameters(array('profileId' => $happy4Friends[$i]["id"] ))->getSingleResult();

            foreach ($sports as $key => $value) {
                $happy4Friends[$i]["sports"][$key] = $em->createQuery("SELECT s.nom, s.nameVn, s.classIcons FROM SportimimiuserBundle:Category s WHERE s.id = :catId")
                    ->setParameters(array('catId' => $value['category_id']))->getResult();
            }

            $happy4Friends[$i]['nom'] = $nomes;
            $happy4Friends[$i]['img'] = end($img)['id'].".".end($img)['url'];
        }
        //echo "<pre>";print_r($happy4Friends);die();

        //$happy4FriendsIds = array(27,28,29);

        $userRates = $this->getDoctrine()->getRepository('SportimimiuserBundle:UserRating')->findBy(array("profile" => $happy4FriendsIds));

        foreach ($userRates as $key => $value) {
            $userRates[$key] = $value->getArray();
        }

        $rates = array();
        foreach ($happy4FriendsIds as $key => $value) {
            $rates[$key] = 0;
            $rates[$key."_num"] = 0;
            $rates[$key."_val"] = 0;
            foreach ($userRates as $keyRt => $valueRt) {
                if ($value == $valueRt["profile"]){
                    $rates[$key] += $valueRt["rate"];                
                    $rates[$key."_num"]++;     
                }         
            }
            if ($rates[$key."_num"] != 0)
                $rates[$key."_val"] = $rates[$key] / $rates[$key."_num"];

            $happy4Friends[$key]["rate"] = $rates[$key."_val"];
        }

        

        //echo "<pre>";print_r($happy4Friends);die();

        return new Response(json_encode($happy4Friends), 200);
    }

}
