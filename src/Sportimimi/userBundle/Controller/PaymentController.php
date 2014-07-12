<?php

namespace Sportimimi\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;
use JMS\Payment\CoreBundle\Entity\Payment;
use JMS\Payment\CoreBundle\PluginController\Result;
use JMS\Payment\CoreBundle\Plugin\Exception\ActionRequiredException;
use JMS\Payment\CoreBundle\Plugin\Exception\Action\VisitUrl;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sportimimi\userBundle\Entity\Order;

class PaymentController extends Controller {

    /** @DI\Inject */
    private $request;

    /** @DI\Inject */
    private $router;

    /** @DI\Inject("doctrine.orm.entity_manager") */
    private $em;

    /** @DI\Inject("payment.plugin_controller") */
    private $ppc;

    /**
     * @Route("/{orderNumber}/details", name = "payment_details")
     * @Template
     */
    public function detailsAction(Order $order) {
        $form = $this->getFormFactory()->create('jms_choose_payment_method', null, array(
            'amount' => $order->getAmount(),
            'currency' => 'EUR',
            'default_method' => 'payment_paypal', // Optional
            'predefined_data' => array(
                'paypal_express_checkout' => array(
                    'return_url' => $this->router->generate('payment_complete', array(
                        'orderNumber' => $order->getOrderNumber(),
                            ), true),
                    'cancel_url' => $this->router->generate('payment_cancel', array(
                        'orderNumber' => $order->getOrderNumber(),
                            ), true)
                ),
            ),
        ));

        if ('POST' === $this->request->getMethod()) {
            $form->handleRequest($this->request);

            if ($form->isValid()) {
                $this->ppc->createPaymentInstruction($instruction = $form->getData());

                $order->setPaymentInstruction($instruction);
                $this->em->persist($order);
                $this->em->flush($order);

                return new RedirectResponse($this->router->generate('payment_complete', array(
                            'orderNumber' => $order->getOrderNumber(),
                )));
            }
        }

        return array(
            'form' => $form->createView()
        );
    }

    //choose paiement method
    public function indexAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $form = $this->getFormFactory()->create('jms_choose_payment_method', null, array(
            'amount' => 20,
            'currency' => 'EUR',
            'default_method' => 'payment_paypal', // Optional
            'predefined_data' => array()
        ));

        if ('POST' === $this->request->getMethod()) {
            $form->handleRequest($this->request);
            $order = new Order();
            $this->em->persist($order);
            $this->em->flush($order);

            $form = $this->getFormFactory()->create('jms_choose_payment_method', null, array(
                'amount' => 20,
                'currency' => 'EUR',
                'default_method' => 'payment_paypal', // Optional
                'predefined_data' => array(
                    'paypal_express_checkout' => array(
                        'return_url' => $this->router->generate('payment_complete', array(
                            'id' => $order->getId()
                                ), true),
                        'cancel_url' => $this->router->generate('payment_cancel', array(
                            'id' => $order->getId()
                                ), true)
                    ),
                ),
            ));

            $form->handleRequest($this->request);

            // Once the Form is validate, you update the order with payment instruction
            if ($form->isValid()) {
                $instruction = $form->getData();
                $this->ppc->createPaymentInstruction($instruction);
                $order->setPaymentInstruction($instruction);
                
                $this->em->persist($order);
                $this->em->flush($order);
                // now, let's redirect to payment_complete with the order id
                return new RedirectResponse($this->router->generate('payment_complete', array('id' => $order->getId())));
            }
        }


        return $this->render('SportimimiuserBundle:Payment:index.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
        ));
    }

    /** @DI\LookupMethod("form.factory") */
    protected function getFormFactory() {
        
    }

    public function completeAction($id = 0) { // id of the order
        if ($_GET['id'] != 0) {
            
             $repository = $this->getDoctrine()
                ->getRepository('SportimimiuserBundle:Order');

            $order = $repository->findOneById($_GET['id']);
            
        }

        $instruction = $order->getPaymentInstruction();
        if (null === $pendingTransaction = $instruction->getPendingTransaction()) {
            $payment = $this->ppc->createPayment($instruction->getId(), $instruction->getAmount() - $instruction->getDepositedAmount());
        } else {
            $payment = $pendingTransaction->getPayment();
        }

        $result = $this->ppc->approveAndDeposit($payment->getId(), $payment->getTargetAmount());
        if (Result::STATUS_PENDING === $result->getStatus()) {
            $ex = $result->getPluginException();
            if ($ex instanceof ActionRequiredException) {
                $action = $ex->getAction();
                if ($action instanceof VisitUrl) {
                    return new RedirectResponse($action->getUrl());
                }
                throw $ex;
            }
        } else if (Result::STATUS_SUCCESS !== $result->getStatus()) {
            throw new \RuntimeException('Transaction was not successful: ' . $result->getReasonCode());
        }
        // if successfull, i render my order validation template
        return $this->render('YourBundle:Paiement:validation.html.twig', array('order' => $order));
    }

    public function CancelAction() {
        $this->get('session')->getFlashBag()->add('info', 'Transaction annulée.');
        return $this->redirect($this->generateUrl('yourTemplate'));
    }

}
