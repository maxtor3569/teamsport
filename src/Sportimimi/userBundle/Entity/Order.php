<?php

namespace Sportimimi\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Payment\CoreBundle\Entity\PaymentInstruction;

/**
 * @ORM\Entity
 * @ORM\Table(name="orderTable")
 */
class Order {
    
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="JMS\Payment\CoreBundle\Entity\PaymentInstruction") 
     */
    private $paymentInstruction;

   

    /**
     *  @ORM\Column(type="decimal", precision = 2,nullable=true) 
     */
    private $amount;

    // ...

    public function getId() {
        return $this->id;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPaymentInstruction() {
        return $this->paymentInstruction;
    }

    public function setPaymentInstruction(PaymentInstruction $instruction) {
        $this->paymentInstruction = $instruction;
    }
     public function setAmount($amountVal) {
        $this->amount = $amountVal;
    }
    // ...
}
