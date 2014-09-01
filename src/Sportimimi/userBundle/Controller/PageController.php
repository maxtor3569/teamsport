<?php

// src/Sportimimi/userBundle/Controller/PageController.php

namespace Sportimimi\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
// Import new namespaces
use Sportimimi\userBundle\Entity\Enquiry;
use Sportimimi\userBundle\Form\EnquiryType;
use FOS\UserBundle\Controller\SecurityController as SecurityController;
use Doctrine\ORM\Query\ResultSetMapping;
use Sportimimi\userBundle\Entity\Country;
use Sportimimi\userBundle\Entity\User;
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Notification;
use FOS\UserBundle\Mailer\Mailer;
use FOS\UserBundle\Util\TokenGenerator;
use FOS\FacebookBundle\Facebook;
// Add Forms
use Sportimimi\userBundle\Form\ProfileForm;

class PageController extends Controller
{

    public function indexAction()
    {
        // We retrieve the Session object
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $facebook = $this->get('facebook');
        $offset = 5;

        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        $user = $user->getProfile();

        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:Profile p');

        $recentProfile = $query->getResult();
        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:Team p');

        $recentTeam = $query->getResult();

        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:Category p');
        $allSports = $query->getResult();

        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:Profile p');
        $profileMatch = $query->getResult();
        shuffle($profileMatch);

        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:Category p ORDER BY p.order ASC');
        $query->setMaxResults(5);
        $randomSport = $query->getResult();

        shuffle($randomSport);

        // Load news
        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:News p ORDER by p.dateCreated DESC');
        $query->setMaxResults($offset);
        $news = $query->getResult();

        //For markers
        $query2 = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:News p WHERE p.doingSports = 1 ORDER by p.dateCreated DESC');

        $markers = $query2->getResult();

        return $this->render('SportimimiuserBundle:Page:index.html.twig', array(
            'user' => $user,
            'recentProfile' => $recentProfile,
            'recentTeam' => $recentTeam,
            'profileMatch' => $profileMatch,
            'facebook' => $facebook,
            'randomSport' => $randomSport,
            'news' => $news,
            'allSports' => $allSports,
            'markers' => $markers
        ));
    }

    public function aboutAction()
    {
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();
        return $this->render('SportimimiuserBundle:Page:about.html.twig', array('user' => $user));
    }

    public function contactAction()
    {
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('Contact'));
            }
        }

        return $this->render('SportimimiuserBundle:Page:contact.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }

    public function feedbackAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();
        /* $query = $em->createQuery(
          'SELECT p FROM SportimimiuserBundle:User p WHERE p.lastLogin > :date'
          )->setParameter('date', '24/12/1990'); */
        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:Profile p');

        $recentProfile = $query->getResult();
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            $feedback = $_POST['description'];
            $email = $_POST['email'];

            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('infos@teamsport.vn')
                ->setTo('maxtor3569@gmail.com')
                ->setBody(
                /* $this->renderView(
                  'HelloBundle:Hello:email.txt.twig',
                  array('name' => $name)
                  ) */
                    'Feedback from: ' . $email . '<br>Feedback:' . $feedback
                );
            $this->get('mailer')->send($message);

            return $this->render('SportimimiuserBundle:Page:index.html.twig', array(
                'user' => $user,
                'recentProfile' => $recentProfile
            ));
        }
    }

    public function registrationCompleteAction()
    {
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        return $this->render('SportimimiuserBundle:Page:registrationComplete.html.twig', array(
            'user' => $user
        ));
    }

    public function LoginBisAction()
    {
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Security:login_content.html.twig', array(
            'last_username' => null,
            'error' => null,
            'csrf_token' => $csrfToken
        ));
    }

    public function loadMoreAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $session = $this->getRequest()->getSession();
        //set up start result
        if (isset($_POST['start']))
            $start = $_POST['start'];
        else
            $start = 0;

        $offset = 5;
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();


        // Load news
        $query = $em->createQuery(
            'SELECT p FROM SportimimiuserBundle:News p ORDER by p.dateCreated DESC');
        $query->setFirstResult($start);
        $query->setMaxResults($offset);
        $news = $query->getResult();
        return $this->render('SportimimiuserBundle:News:dynamicNews.html.twig',
            array('news' => $news, 'user' => $user)
        );
    }

    public function baseRightAction($profileOnlinePass = null)
    {
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->container->get('doctrine')->getManager();

        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('Sportimimi\userBundle\Entity\User', 'u');
        $rsm->addFieldResult('u', 'id', 'id');
        $rsm->addFieldResult('u', 'lastActive', 'lastActive');
        $now = date("Y-m-d H:i:s");
        $sql = 'SELECT u.id,u.lastActive FROM fos_user u HAVING TIMESTAMPDIFF(MINUTE,u.lastActive,NOW()) < 1';
        $query = $em->createNativeQuery($sql, $rsm);
        $profileOnlinePass = $query->getResult();

        return $this->render('SportimimiuserBundle:Page:basepart_right.html.twig', array(
            'profileOnline' => $profileOnlinePass,
            'user' => $user
        ));
    }

    public function baseMessageAction()
    {
        $request = $this->container->get('request');
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();
        $id_profile = $user->getId();
        $conversation = null;
        if (isset($_POST['id_profile_select']))
            $id_profile_select = $_POST['id_profile_select'];
        $em = $this->container->get('doctrine')->getManager();
        if ($request->isXmlHttpRequest() && isset($id_profile_select)) {
            $sql = 'SELECT p FROM SportimimiuserBundle:Message p WHERE (p.profile_send = ' . $id_profile . ' AND p.profile_recieve = ' . $id_profile_select . ') OR (p.profile_send = ' . $id_profile_select . ' AND p.profile_recieve = ' . $id_profile . ' )';
            $query = $em->createQuery($sql);
            $conversation = $query->getSingleResult();

        }
        // $conversations = $em->getRepository('SportimimiuserBundle:Message')->findAll();

        return $this->render('SportimimiuserBundle:Page:chat_message.html.twig', array(
            'conversation' => $conversation,
            'user' => $user
        ));
    }

    // page princing : display all profile price
    public function pricingIndexAction()
    {
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        return $this->render('SportimimiuserBundle:Page:pro_account.html.twig', array(
            'user' => $user
        ));
    }

    // Privacy policy
    public function privacyAction()
    {
        //Pass user to the page
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') // Check user is not anonyme
            $user = $user->getProfile();

        return $this->render('SportimimiuserBundle:Page:privacy_policy.html.twig', array(
            'user' => $user
        ));
    }

    public function unsubscribeAction(Request $request)
    {
        $email = '';
        if (isset($_GET['email']))
            $email = $_GET['email'];
        if ($request->getMethod() == 'POST') {

            $em = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository('SportimimiuserBundle:User');
            if (isset($_POST['user']))
                $user = $_POST['user'];

            $user = $repository->findOneByEmail($_POST['user']);
            $user->setNewsletter(0);
            $em->persist($user);
            $em->flush();
            return $this->render('SportimimiuserBundle:Page:unsubscribe.html.twig', array('result' => 'Unsubscribe OK'));

        }

        return $this->render('SportimimiuserBundle:Page:unsubscribe.html.twig', array('email' => $email));


    }

}
