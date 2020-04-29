<?php


namespace Service\Product;

use Model\Entity\Product;
use Service\Product\ComporatorInterface;

class PriceComporator implements ComporatorInterface
{
    /**
     * @param Product $a
     * @param Product $b
     * @return int
     */
    public function compare($a, $b): int
    {
        return $a->getPrice() <=> $b->getPrice();
    }

}