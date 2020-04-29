<?php


namespace Service\Product;


interface ComporatorInterface
{

    /**
     * @param $a
     * @param $b
     * return mixed
     */
    public function compare($a, $b);

}