<?php

// src/Sportimimi/userBundle/Controller/PlaceController.php

namespace Sportimimi\userBundle\Controller;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use Sportimimi\userBundle\Entity\Place;
use Sportimimi\userBundle\Entity\PlaceCurrentlyPlay;
use Sportimimi\userBundle\Form\SearchPlace;

class PlaceController extends Controller {

    public function indexAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->getDoctrine()->getManager();
        //Search form
        $form = $this->container->get('form.factory')->create(new SearchPlace());

        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Place');

        $place = $repository->findAll();


        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Place:homepage.html.twig', array(
                    'form' => $form->createView(),
                    'user' => $user,
                    'places' => $place,
        ));
    }

    public function listPlaceAction(Request $request) {


        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $em = $this->getDoctrine()->getManager();
        $form = $this->container->get('form.factory')->create(new SearchPlace());


        // This part need to be change.. but it's working..
        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Place');

        //START PAGINATION
        if (isset($_GET['page']) && is_numeric($_GET['page']))
            $page = $_GET['page'];
        else
            $page = 1;

        // items
        $pagination = 10;
        // Num�ro du 1er enregistrement � lire
        $limit_start = ($page - 1) * $pagination;
        $sql = 'SELECT p FROM SportimimiuserBundle:Place p';
        // END PAGINATION	


        $i = 0;
        $query = $repository->createQueryBuilder('p');

        if (isset($_POST['searchPlace'])) {

            foreach ($_POST['searchPlace'] as $field => $value) {

                if (!$em->getClassMetadata('SportimimiuserBundle:Place')->hasField($field)) {
                    // Make sure we only use existing fields (avoid any injection)
                    continue;
                } else {
                    if ($value != '') {
                        if ($field != 'placeName') {
                            if ($i == 0)
                                $sql.=" WHERE p." . $field . " LIKE '" . $value . "'";
                            else
                                $sql.=" AND p." . $field . " LIKE '" . $value . "'";
                            /* $query = $em->createQuery('
                              SELECT p FROM SportimimiuserBundle:Place p
                              WHERE p.'.$field.' LIKE :value')

                              ->setParameter('value', $value); */
                        }
                        else {
                            if ($i == 0)
                                $sql.=" WHERE p." . $field . " LIKE '%" . $value . "%'";
                            else
                                $sql.=" AND p." . $field . " LIKE '%" . $value . "%'";
                        }
                        $i++;
                    }
                }
            }
        }
        //$sql.=' LIMIT '.$limit_start.', '.$pagination;
        //echo $sql;

        $query = $em->createQuery($sql);
        $numberPlace = $query->getResult();
        $query->setFirstResult($limit_start);
        $query->setMaxResults($pagination);
        $place = $query->getResult();



        $total = count($numberPlace);
        //Number of page
        $numberPage = ceil($total / $pagination);
        $pager = ' <div class="widget widget-heading-simple widget-body-gray">
                    <center>
                    <div class="widget-body" data-toggle="source-code">
                        <div class="pagination pagination-large pagination-centered margin-none">
                            <ul class="pagination pagination-centered margin-none"><li class="disabled"><a href="#">&laquo;</a>
                                </li>';
        for ($i = 1; $i <= $numberPage; $i++) {

            if ($i == $page) {
                $pager.='<li class="active"><a href="">' . $i . '</a></li>';
            } else { //Sinon...
                $pager.= '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
            }
        }
        $pager.='<li><a href="?page=' . $numberPage . '">&raquo;</a>
                                </li></ul>
                        </div>
                    </div>
                    </center>
                </div>';
        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Place:listPlace.html.twig', array(
                    'places' => $place,
                    'user' => $user,
                    'form' => $form->createView(),
                    'current_page' => $page,
                    'pager' => $pager,
        ));
    }

    public function detailPlaceAction($name = null) {

        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Place');

        $place = $repository->findOneByplaceName(str_replace("-", " ", $name));

        // Token for comments system..
        /*
          @@ Generating a cryptographically strong pseudorandom value for preventing CSRF and XSRF attacks.
         */
        function crypto_rand_secure($min, $max) {
            $range = $max - $min;
            if ($range < 0)
                return $min;## Not so random
            $log = log($range, 2);
            $bytes = (int) ($log / 8) + 1; ## Length in bytes
            $bits = (int) $log + 1; ## Length in bits
            $filter = (int) (1 << $bits) - 1; ## Set all lower bits to 1
            do {
                $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
                $rnd = $rnd & $filter; ## Discard irrelevant bits
            } while ($rnd >= $range);

            return $min + $rnd;
        }

        function get_token($length) {
            $token = '';
            $codeAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $codeAlphabet .= 'abcdefghijklmnopqrstuvwxyz';
            $codeAlphabet .= '0123456789';
            for ($i = 0; $i < $length; $i++) {
                $token .= $codeAlphabet[crypto_rand_secure(0, strlen($codeAlphabet))];
            }

            return $token;
        }

        //Get the token
        $token = get_token(20);
        //put the session token
        $session = $this->getRequest()->getSession();
        $session->set('token', $token);
        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Place:detailPlace.html.twig', array(
                    'token' => $token,
                    'place' => $place,
                    'user' => $user
        ));
    }

    public function createPlaceAction(Request $request) {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {

            $name = $_POST['new_name_place'];
            $address = $_POST['new_adress_place'];
            //Create a new place
            $place = new Place();
            $place->setPlaceName($name);
            $place->setAddress($address);
            $em->persist($place);
            $em->flush();
            return $this->redirect($this->generateUrl('ListPlace'), 301);
        }
        return $this->container->get('templating')->renderResponse(
                        'SportimimiuserBundle:Place:createPlace.html.twig', array(
                    'user' => $user
        ));
    }

    public function currentlyPlayHereAction() {
        print_r($_POST);
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();
        $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Place');

        $place = $repository->findOneById($_POST['id_place']);
        // Create a record for the place which the player is currently playing
        $record = new PlaceCurrentlyPlay();

        $record->setPlace($place);
        $record->setProfile($user);
        $record->setFinishAt($_POST['finishAt']);
        $em->persist($record);
        $em->flush();

        return new Response('Record save', 200, array('Content-Type' => 'application/html'));
    }

    public function placeListJsonAction(Request $request) {
        $name = $request->get('q');
        $result = $this->getDoctrine()->getRepository('SportimimiuserBundle:Place')->findLikeName($name);

        return new Response(json_encode($result), 200);
    }

}
