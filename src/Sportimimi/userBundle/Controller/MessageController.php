<?php

namespace Sportimimi\userBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Message;
use Sportimimi\userBundle\Entity\MessageReply;

class MessageController extends Controller {

    public function indexAction() {

        //get user profile
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $id_profile = $user->getId();
        $em = $this->getDoctrine()->getManager();

        //get all conversations where profile send or profile receive == current profile

        $query = $em->createQuery('SELECT p FROM SportimimiuserBundle:Message p WHERE (p.profile_send = ' . $id_profile . ' OR p.profile_recieve = ' . $id_profile . ' ) ORDER BY p.id DESC ');
        $messages = $query->getResult();


        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Message:index.html.twig', array(
                    'user' => $user,
                    'messages' => $messages
        ));
    }

    public function addMessageAction(Request $request) {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();

        $dt = new \DateTime();
        if ($request->getMethod() == "POST") {

            $message_content = $_POST['message'];
            $profile_recieve_id = $_POST['profile_recieve'];

            $repository = $this->getDoctrine()
                    ->getRepository('SportimimiuserBundle:Profile');

            $profile_receive = $repository->findOneById($profile_recieve_id);
            $id_profile = $user->getId();

            //check if a conversation between exists or not
            $query = $em->createQuery('SELECT p FROM SportimimiuserBundle:Message p WHERE (p.profile_send = ' . $id_profile . ' AND p.profile_recieve = ' . $profile_recieve_id . ') OR (p.profile_send = ' . $profile_recieve_id . ' AND p.profile_recieve = ' . $id_profile . ' )');

            $conversation = $query->getResult();

            if ($conversation == null) {
                //if not : Create a new message
                $message = new Message();
                $message->setProfile_send($user);
                $message->setProfile_recieve($profile_receive);
                $em->persist($message);
                $em->flush();
                //create now a new reply
                $reply = new MessageReply();
                $reply->setMessage($message);
                $reply->setContent($message_content);
                $reply->setProfile($user);
                $em->persist($reply);
                $em->flush();
            } else {
                //there is a exist conversation
                $message_exists = $query->getSingleResult();
                //create now a new reply
                $reply = new MessageReply();
                $reply->setMessage($message_exists);
                $reply->setContent($message_content);
                $reply->setProfile($user);
                $em->persist($reply);
                $em->flush();
            }
        }

        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Message:new-message.html.twig', array(
                    'user' => $user,
        ));
    }

    public function listMessageReplyAction(Request $request) {
        $replies = '';
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        if ($request->isXmlHttpRequest()) {
            $id = $_POST['id'];
            $em = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository('SportimimiuserBundle:Message');
            $message = $repository->findOneById($id);
            $replies = $message->getMessage_reply();
        }
        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Message:loadMessage.html.twig', array(
                    'user' => $user,
                    'replies' => $replies,
               
        ));
    }

    public function replyConversationAction(Request $request) {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();
        if ($request->isXmlHttpRequest()) {
            $id = $_POST['id'];
            $message_content = $_POST['message_content'];
            $em = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository('SportimimiuserBundle:Message');
            $message = $repository->findOneById($id);
            $reply = new MessageReply();
            $reply->setMessage($message);
            $reply->setContent($message_content);
            $reply->setProfile($user);
            $em->persist($reply);
            $em->flush();
            return new Response('ok', 200, array('Content-Type' => 'application/json'));
        }
        return new Response('no access', 200, array('Content-Type' => 'application/json'));
    }

}
