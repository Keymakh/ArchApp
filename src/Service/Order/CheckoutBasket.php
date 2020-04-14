<?php


namespace Service\Order;

use Service\Billing\Exception\BillingException;
use Service\Communication\Exception\CommunicationException;
use Service\Order\BasketBuilder;
use Service\Billing\BillingInterface;
use Service\Communication\CommunicationInterface;
use Service\Discount\DiscountInterface;
use Service\User\SecurityInterface;

class CheckoutBasket
{
   private $discount;

   private $billing;

   private $security;

   private $communication;

    /**
     * Проведение всех этапов заказа
     * @param DiscountInterface $discount
     * @param BillingInterface $billing
     * @param SecurityInterface $security
     * @param CommunicationInterface $communication
     * @return void
     * @throws BillingException
     * @throws CommunicationException
     */
    public function checkoutProcess(
        DiscountInterface $discount,
        BillingInterface $billing,
        SecurityInterface $security,
        CommunicationInterface $communication
    ): void
    {
        $totalPrice = 0;
        foreach ($this->getProductsInfo() as $product) {
            $totalPrice += $product->getPrice();
        }

        $discount = $discount->getDiscount();
        $totalPrice = $totalPrice - $totalPrice / 100 * $discount;

        $billing->pay($totalPrice);

        $user = $security->getUser();
        $communication->process($user, 'checkout_template');


    }
}