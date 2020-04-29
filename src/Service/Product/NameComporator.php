<?php


namespace Service\Product;

use Model\Entity\Product;
use Service\Product\ComporatorInterface;

class NameComporator implements ComporatorInterface
{
    /**
     * @param Product $a
     * @param Product $b
     * @return string
     */
    public function compare($a, $b): string
    {
        return $a->getName() <=> $b->getName();
    }

}