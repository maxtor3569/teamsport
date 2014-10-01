<?php

namespace Sportimimi\userBundle\Controller\Rest;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\RouteRedirectView;
use Sportimimi\userBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\View\View;
use Sportimimi\userBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserRegisterController extends Controller
{
    public function registerAction(Request $request)
    {
        $manager = $this->get('fos_user.user_manager');
        $user = $manager->createUser();
        $form = $this->createForm(new RegistrationFormType(false), $user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $user->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $manager->updateUser($user);

            return $this->onRegisterUserSuccess($user);
        }

        return $this->onRegisterUserSuccess($form);
    }

    /**
     * @param User $user
     * @return View
     */
    protected function onRegisterUserSuccess(User $user)
    {
        $route = $this->generateUrl(
            $this->getRequest()->getLocale() . '__RG__﻿Homepage'
        );

        return new Response(null, 201);
    }

    /**
     * Returns a HTTP_BAD_REQUEST response when the form submission fails.
     *
     * @param FormInterface $form
     * @return View
     */
    protected function onRegisterUserError(FormInterface $form)
    {
        $view = View::create()
            ->setStatusCode(Codes::HTTP_BAD_REQUEST)
            ->setData(array(
                'form' => $form
            ))
        ;

        return $view;
    }

}
