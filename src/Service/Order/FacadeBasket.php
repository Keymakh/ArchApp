<?php


namespace Service\Order;

use Service\Billing\Transfer\Card;
use Service\Discount\NullObject;
use Service\Communication\Sender\Email;
use Service\User\Security;
use Model\Entity\Product;
use Model\Repository\ProductRepository;
use Model\Entity\User;
use Model\Repository\UserRepository;
use Service\Order\Basket;


class FacadeBasket
{

private $basket;

public function __construct(Basket $basket)
{
    $this->basket = $basket;
}

public function checkoutBasket(array $order)
{
   $this->basket->checkout($order);
   $this->basket->checkoutProcess($order);
}


}