<?php


namespace Service\Order;

use Model;
use Model\Entity\Product;
use Model\Repository\ProductRepository;
use Service\Billing\Exception\BillingException;
use Service\Billing\BillingInterface;
use Service\Billing\Transfer\Card;
use Service\Communication\Exception\CommunicationException;
use Service\Communication\CommunicationInterface;
use Service\Communication\Sender\Email;
use Service\Discount\DiscountInterface;
use Service\Discount\NullObject;
use Service\User\SecurityInterface;
use Service\User\Security;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class BasketBuilder

{
    private $billing;

    private $discount;

    private $communication;

    private $security;

    public function getBilling()
    {
        return $this->billing;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getCommunication()
    {
        return $this->communication;
    }

    public function getSecurity(): ?Security
    {
        return $this->security;
    }

    public function setBilling($billing):BillingInterface
    {
        $this->billing = $billing;
        return $this;
    }

    public function setDiscount($discount): DiscountInterface
    {
        $this->discount = $discount;
        return $this;

    }

    public function setCommunication($communication): CommunicationInterface
    {
        $this->communication = $communication;
        return $this;
    }

    public function setSecurity(Security $security): SecurityInterface
    {
        $this->security = $security;
        return $this;
    }

    public function build(): Basket
    {
        return new Basket($this);
    }
}