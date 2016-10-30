<?php

namespace Vendor\Service\PricePolicy;

use Vendor\Service\Order\OrderInf;


class PrimaryPricePolicy extends PricePolicyInt
 {
     public $priceType = "Primary price";

     /**
      * @param OrderInf object
      */
     public function getPrice(OrderInf $order)
     {
         return ($order->getQuantity() * 3);
     }

     public function getPriceTypes()
     {
         return $this->priceType;
     }
 }