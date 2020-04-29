<?php


namespace Service\Product;

use Model\Entity\Product;
use Service\Product\ComporatorInterface;
use Model\Repository\ProductRepository;

class ProductSorter
{
    /**
     * @var ComporatorInterface
     */
   private $comparator;

    /**
     * ProductSorter constructor.
     * @param ComporatorInterface $comparator
     */
   public function __construct(ComporatorInterface $comparator)
   {
       $this->comparator = $comparator;
   }

    /**
     * @param ProductRepository[] $productList
     * @return ProductRepository[]
     */
  public function sort(ProductRepository $productList): array
  {
      usort($productList, [$this->comparator, 'compare']);

      return $productList;
  }
}