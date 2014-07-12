<?php

// src/Sportimimi/userBundle/Controller/TeamController.php

namespace Sportimimi\userBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Category;
use Sportimimi\userBundle\Entity\Country;
use Sportimimi\userBundle\Entity\Image;
use Sportimimi\userBundle\Entity\Team;
use Sportimimi\userBundle\Entity\Match;
use Sportimimi\userBundle\Entity\Position;
use Sportimimi\userBundle\Entity\Notification;
use Sportimimi\userBundle\Entity\InvitationTeam;
// Add Forms
use Sportimimi\userBundle\Form\CreateTeamForm;
use Sportimimi\userBundle\Form\SearchTeam;

class TeamController extends Controller {

    public function createTeamAction() {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        if (count($user->getTeams()) >= 3)
            return $this->redirect($this->generateUrl('DetailProfile', array('id' => $user->getId()), 301));
        $message = '';
        $team = new Team();
        $form = $this->container->get('form.factory')->create(new CreateTeamForm(), $team);
        //Database save
        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {

                $em = $this->container->get('doctrine')->getManager();

                $team->addProfile($user);
                $team->setLeader($user);
                $user->addTeam($team);
                $em->persist($team);
                $em->persist($user);
                $em->flush();
                $message = 'Team had with success !';
                return $this->redirect($this->generateUrl('ViewTeam', array('name' => $team->getAlias()), 301));
            }
        }



        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:addTeam.html.twig', array(
                    'form' => $form->createView(),
                    'message' => $message,
                    'user' => $user
        ));
    }

    public function addPlayerToMyTeamAction() {
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        if ($request->isXmlHttpRequest()) {

            //Get the profile selected
            $idProfile = $_POST['idProfile'];
            $repository2 = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Profile');
            $ProfileAdd = $repository2->findOneById($idProfile);
            //Get the team
            $idTeam = $_POST['idTeam'];
            $repository = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Team');
            $team = $repository->findOneById($idTeam);

            $team->addProfile($ProfileAdd);
            $ProfileAdd->addTeam($team);

            //Send invitation
            $notification = new Notification();
            $notification->setMessage('Team : Leader of Team ' . $team->getName() . ' has invitated you to his team');
            $notification->setProfile($ProfileAdd);
            $ProfileAdd->addNotifications($notification);
            $em->persist($ProfileAdd);
            $em->persist($notification);



            $em->persist($team);
            $em->persist($ProfileAdd);
            $em->flush();
        }
        $return = 'ok';
        return new Response($return, 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    public function detailAction($name = null) {

        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Team');

        $team = $repository->findOneByAlias($name);
        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:detailTeam.html.twig', array(
                    'team' => $team,
                    'user' => $user
        ));
    }

    public function deleteTeamAction() {
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();

        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        /* if($request->isXmlHttpRequest())
          { */

        //Get the profile selected
        $idTeam = $_GET['id'];
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Team');
        $team = $repository->findOneById($idTeam);

        if (!$team) {
            throw $this->createNotFoundException('No Team found');
        }

        //remove all profile
        foreach ($team->getProfile() as $profile) {
            //remove all position from the profile
            /*
              foreach($team->getPositions() as $position)
              {
              $em->remove($position);
              $em->persist($position);
              } */
            $team->removeProfile($profile);
        }

        //delete the team
        $em->remove($team);
        $em->persist($team);
        $em->flush();


        //}
        // RETURN INITIAL VIEW

        $profile = $em->getRepository('SportimimiuserBundle:Profile')->findAll();
        return $this->redirect($this->generateUrl('DetailProfile', array('id' => $user->getId()), 301));
        /* return $this->container->get('templating')->renderResponse(
          'SportimimiuserBundle:Profile:detailProfile.html.twig',array(
          'profile' => $user, 'numberProfile' => $results,'user' => $user)
          ); */
    }

    public function challengeTeamAction() {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        if ($request->isXmlHttpRequest()) {
            //Get the team who receive the challenge
            $repository = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Team');
            $teamChallenged = $repository->findOneById($_POST['idTeamProfile']);

            $repository2 = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Team');
            $teamChallenge = $repository2->findOneById($_POST['idTeam']);

            //get all users from this team
            $teamProfile = $teamChallenged->getProfile();
            foreach ($teamProfile as $key => $profile) {
                $notification = new Notification();
                $notification->setMessage('Team : A team has challenged you');
                $notification->setProfile($profile);
                $profile->addNotifications($notification);
                $em->persist($profile);
                $em->persist($notification);
            }
            //Create a fucking match (I have little drunk hard do code)
            $match = new Match();
            $match->addTeam($teamChallenged);
            $match->addTeam($teamChallenge);
            $teamChallenged->addMatch($match);
            ;
            $teamChallenge->addMatch($match);
            $em->persist($match);
            $em->persist($teamChallenged);
            $em->persist($teamChallenge);
            $em->flush();
        }


        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:detailTeam.html.twig', array(
                    'team' => $teamChallenged,
                    'user' => $user
        ));
    }

    public function listTeamAction(Request $request) {
        //Get current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $em = $this->getDoctrine()->getManager();
        $teams = $em->getRepository('SportimimiuserBundle:Team')->findAll();
        $categories = $em->getRepository('SportimimiuserBundle:Category')->findAll();
        if (isset($_GET['sport']))
            $teams = $em->getRepository('SportimimiuserBundle:Team')->findByCategory($_GET['sport']);

        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Team:listTeams.html.twig', array(
                    'user' => $user,
                    'teams' => $teams,
                    'categories' => $categories
        ));
    }

    public function removeProfileAction() {
        //Get current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $idTeam = $_GET['id_team'];
        $idProfile = $_GET['id_profile'];
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Team');
        $team = $repository->findOneById($idTeam);

        if (!$team) {
            throw $this->createNotFoundException('No guest found');
        }

        $repository2 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Profile');
        $profile = $repository2->findOneById($idProfile);

        if (!$profile) {
            throw $this->createNotFoundException('No guest found');
        }

        $em = $this->getDoctrine()->getManager();

        $team->removeProfile($profile);
        $em->persist($team);
        $em->flush();

        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:detailTeam.html.twig', array(
                    'team' => $team,
                    'user' => $user
        ));
    }

    public function changePositionAction() {
        //Get current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $team_id = $_POST['team_id'];
        $profile_id = $_POST['profile_id'];
        $positionName = $_POST['positionName'];
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Profile');
        $profile = $repository->findOneById($profile_id);

        $repository2 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Team');

        $team = $repository2->findOneById($team_id);
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        // if have ajax
        if ($request->isXmlHttpRequest()) {
            $repository3 = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Position');
            $position = $repository3->findOneBy(array('profile' => $profile_id, 'team' => $team_id));
            if ($position == null)
                $position = new Position();
            /* if ($coordinate != null)
              $position->setTopPos($_POST['dfddfs'])
             */


            $position->setProfile($profile);
            $position->setTeam($team);
            $position->setName($positionName);
            $em->persist($position);
            $em->flush();
        }

        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Profile:detailTeam.html.twig', array(
                    'team' => $team,
                    'user' => $user
        ));
    }

    public function inviteMeToTeamAction() {
        $em = $this->getDoctrine()->getManager();
        //Get current user
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $team_id = $_POST['team_id'];
        $repository2 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Team');

        $team = $repository2->findOneById($team_id);

        //Create invitation
        $invitation = new InvitationTeam();
        $invitation->setTeam($team);
        $invitation->setProfile($user);
        $em->persist($invitation);
        $em->flush();
        //Send notification to the leader of the team
        $notification = new Notification();
        $notification->setMessage($user->getNom() . ' ' . $user->getPrenom() . ' muốn tham gia vào đội của bạn<br/><a href="' . $this->generateUrl('AcceptProfileTeam', array('id' => $invitation->getId())) . '">Accept</a>- <a href=" ">Ignore</a>');
        $notification->setProfile($team->getLeader());
        $notification->setInvitation_team($invitation);
        $team->getLeader()->addNotifications($notification);


        $em->persist($team);
        $em->persist($notification);
        $em->flush();

        $return = 'ok';
        return new Response($return, 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    public function acceptInvitationProfileTeamAction($id = null) {

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $repository2 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:InvitationTeam');
        $invitation = $repository2->findOneById($id);
        $profile = $invitation->getProfile();
        $team = $invitation->getTeam();

        //secure invitations..
        if ($user->getId() != $invitation->getTeam()->getLeader()->getId())
            return null;

        $invitation->setStatus('1');
        $em->persist($invitation);
        $em->flush();

        $profile->addTeam($team);
        $team->addProfile($profile);
        //Notificate user of acceptation
        $notification = new Notification();
        $notification->setMessage($user->getNom() . ' ' . $user->getPrenom() . ' has accepted your friend invitation');
        $notification->setProfile($profile);
        $profile->addNotifications($notification);


        // delete notification of sending..
        $repository3 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Notification');
        $notif = $repository3->findOneByInvitation_team($id);
        $em->remove($notif);

        $em->persist($profile);
        $em->persist($team);
        $em->persist($notification);

        $em->flush();
        $referer = $this->getRequest()->headers->get('referer');
        return new RedirectResponse($referer);
    }

    public function changeNameAction() {
        //var_dump($_POST);
        $id = $_POST['id_team'];
        $name = $_POST['value'];
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $repository2 = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Team');
        $team = $repository2->findOneById($id);
        $team->setName($name);
        $em->persist($team);
        $em->flush();
        return new Response($name);
        //return $this->redirect($this->generateUrl('ViewTeam', array('name'=>$team->getAlias()), 301));
    }

}
