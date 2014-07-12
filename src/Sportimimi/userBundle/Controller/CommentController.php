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
use Sportimimi\userBundle\Entity\News;
use Sportimimi\userBundle\Entity\Notification;
use Sportimimi\userBundle\Entity\Comment;
class CommentController extends Controller
{
	public function addAction()
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		
		$em = $this->container->get('doctrine')->getManager();
		
		$news_id = $_POST['newsID'];
		$content = $_POST['content'];
		$news = $em->getRepository('SportimimiuserBundle:News')->findOneById($news_id);
		
		$comment = new Comment();	
		$comment->setContent($content);
		$comment->setProfile($user);
		//$comment->setDatePosted(time());
		$news->addComment($comment);
		$comment->setNews($news);
		$em->persist($news);
		$em->persist($comment);
		$em->flush();
		//return the html
		return $this->render(
			'SportimimiuserBundle:Comment:renderOneComment.html.twig',
				array('comment' => $comment,'user' => $user));
	
	}
	public function deleteAction()
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		
		$em = $this->container->get('doctrine')->getManager();
		
		$repository = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:Comment');
		
		$comment = $repository->findOneById($_POST['id_comment']);	
		$em->remove($comment);
		$em->flush();
		return new Response('ok',200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
	}
}