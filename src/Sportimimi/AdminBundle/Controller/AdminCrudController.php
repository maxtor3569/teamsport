<?php

namespace Sportimimi\AdminBundle\Controller;


use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminCrudController extends Controller
{
    protected $templatesRoot;
    protected $resourceName;
    protected $formType;
    protected $factory;
    protected $repository;
    protected $routingPrefix;

    /**
     * @param mixed $routingPrefix
     *
     * @return $this
     */
    public function setRoutingPrefix($routingPrefix)
    {
        $this->routingPrefix = $routingPrefix;
        return $this;
    }

    /**
     * @param mixed $factory
     *
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param mixed $formType
     *
     * @return $this
     */
    public function setFormType($formType)
    {
        $this->formType = $formType;

        return $this;
    }

    /**
     * @param mixed $repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFormType()
    {
        return $this->formType;
    }

    /**
     * @param mixed $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResourceName()
    {
        return $this->resourceName;
    }

    /**
     * @return mixed
     */
    public function getTemplatesRoot()
    {
        return $this->templatesRoot;
    }

    /**
     * @param mixed $templatesRoot
     *
     * @return $this
     */
    public function setTemplatesRoot($templatesRoot)
    {
        $this->templatesRoot = $templatesRoot;
        return $this;
    }

    public function showAction(Request $request)
    {
        try {
        $entity = $this->findOr404($request);

        return $this->render(sprintf('%s:show.html.twig', $this->templatesRoot), array(
            'entity' => $entity
        ));
        } catch(\Exception $e)
        {
            var_dump($e->getMessage()); exit;
        }
    }

    /**
     * @return Response
     */
    public function indexAction()
    {
        $method = sprintf('find%ss', $this->resourceName);

        if(method_exists($this->repository, $method)) {
            $entities = call_user_func(array($this->repository, $method));
        } else {
            $entities = $this->repository->findAll();
        }

        return $this->render(sprintf('%s:index.html.twig', $this->templatesRoot), array(
            'entities' => $entities
        ));
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function newAction(Request $request)
    {
        $method = sprintf('create%s', $this->resourceName);

        $resource = call_user_func(array($this->getFactory(), $method ));

        $form = $this->createForm($this->getFormType(), $resource);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->dispatchEvent('pre_create', $resource);
            $em = $this->get('doctrine.orm.entity_manager');

            $em->persist($resource);
            $em->flush();
            $this->setFlash('success', 'create');

            $this->dispatchEvent('post_create', $resource);

            return $this->redirectToResource($resource);
        }

        return $this->render(sprintf('%s:new.html.twig', $this->templatesRoot), array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function editAction(Request $request)
    {
        $resource = $this->findOr404($request);

        $form = $this->createForm($this->getFormType(), $resource);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $this->dispatchEvent('pre_edit', $resource);

            $em = $this->get('doctrine.orm.entity_manager');
            $em->flush();
            $this->setFlash('success', 'update');

            $this->dispatchEvent('post_edit', $resource);

            return $this->redirectToResource($resource);
        }

        return $this->render(sprintf('%s:edit.html.twig', $this->templatesRoot), array(
            'form' => $form->createView(),
            'entity' => $resource
        ));
    }

    /**
     * @param  Request          $request
     * @return RedirectResponse
     */
    public function deleteAction(Request $request)
    {
        $resource = $this->findOr404($request);
        /** @var EntityManager $em */
        $em = $this->get('doctrine.orm.entity_manager');

        $this->dispatchEvent('pre_delete', $resource);

        $em->remove($resource);
        $em->flush();
        $this->setFlash('success', 'delete');

        $this->dispatchEvent('post_delete', $resource);

        return $this->redirectToIndex();
    }

    public function closeAction(Request $request)
    {
        $resource = $this->findOr404($request);

        $this->dispatchEvent('pre_close', $resource);

        $resource->setClosedAt(new \DateTime());
        $this->get('doctrine.orm.entity_manager')->flush();
        $this->setFlash('success', 'close');

        $this->dispatchEvent('post_close', $resource);

        return $this->redirectToIndex();
    }

    public function openAction(Request $request)
    {
        $resource = $this->findOr404($request);

        $this->dispatchEvent('pre_open', $resource);

        $resource->setClosedAt(null);
        $this->get('doctrine.orm.entity_manager')->flush();
        $this->setFlash('success', 'open');

        $this->dispatchEvent('post_open', $resource);

        return $this->redirectToIndex();
    }

    /**
     * @param Request $request
     * @param string $identifier
     *
     * @return object
     *
     * @throws NotFoundHttpException
     */
    public function findOr404(Request $request, $identifier = 'id')
    {

        $method = sprintf('find%sBy', $this->resourceName);
        $entity = call_user_func(array($this->repository, $method), array($identifier => $request->get($identifier)));

        if (!$entity) {
            throw $this->createNotFoundException(sprintf('Unable to find %s entity.', $this->resourceName));
        }

        return $entity;
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository()
    {
        return $this->getDoctrine()->getRepository($this->repository);
    }

    private function getResourcePrefix()
    {
        return str_replace(' ', '_', strtolower($this->resourceName));
    }

    private function getResourcePathPrefix()
    {
        return sprintf('sportmimi_admin_%s', $this->getResourcePrefix());
    }

    public function redirectToResource($resource)
    {
        return $this->redirect(
            $this->generateUrl($this->getResourcePathPrefix() . "_show", array('id' => $resource->getId())
            ));
    }

    public function redirectToIndex()
    {
        return $this->redirect(
            $this->generateUrl($this->getResourcePathPrefix() . "_index")
        );
    }

    public function dispatchEvent($name, $resource)
    {
        $event_name = sprintf('admin_crud.%s.%s', $this->getResourcePrefix(), $name);
        $this->get('event_dispatcher')->dispatch($event_name, new GenericEvent($resource));
    }

    public function setFlash($type, $eventName, $params = array())
    {
        /** @var FlashBag $flashBag */
        $flashBag = $this->get('session')->getBag('flashes');
        $flashBag->add($type, $this->translateFlashMessage($eventName, $params));
    }

    /**
     * @param string $event
     * @param array  $params
     *
     * @return string
     */
    private function translateFlashMessage($event, $params = array())
    {
        $resource = ucfirst(str_replace('_', ' ', $this->getResourceName()));
        $message = sprintf('admin_crud.resource.%s', $event);

        return $this->get('translator')->trans($message, array_merge(array('%resource%' => $resource), $params), 'flashes', 'en');
    }

    /**
     * @param $attributes
     * @param null $object
     *
     * @return bool
     */
    public function isGranted($attributes, $object = null)
    {
        return $this->container->get('security.context')->isGranted($attributes, $object);
    }
    
    public function geocodeAction($place)
	{
		$em = $this->get('doctrine.orm.entity_manager');
        $placeO = $em->getRepository('SportimimiuserBundle:Place')->findOneById($place);		
        
        $coords=array();
		$base_url="http://maps.googleapis.com/maps/api/geocode/xml?";
		// ajouter &region=FR si ambiguité (lieu de la requete pris par défaut)
		$request_url = $base_url . "address=" . urlencode($placeO->getAddress()).'&sensor=false';
		$xml = simplexml_load_file($request_url) or die("url not loading");
		//print_r($xml);
		$coords['lat']='';
		$coords['lon']='';
		$coords['status'] = $xml->status ;
		if($coords['status']=='OK')
		{
		 $coords['lat'] = $xml->result->geometry->location->lat ;
		 $coords['lon'] = $xml->result->geometry->location->lng ;
		}

        
		$placeO->setLongitude($coords['lon']);
		$placeO->setLatitude($coords['lat']);
		$em->persist($placeO);
		$em->flush();
		$referer = $this->getRequest()->headers->get('referer');

		return $this->redirect($referer);
	}

}
