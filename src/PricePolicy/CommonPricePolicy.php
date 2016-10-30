<?php

namespace Vendor\Service\PricePolicy;

use Vendor\Service\Order\OrderInf;


class CommonPricePolicy extends PricePolicyInt
 {
     public $priceType = "Common price";

     /**
      * @param OrderInf object
      */

    public function getPrice(OrderInf $order)
    {
        return ($order->getQuantity() * 5);
    }

     public function getPriceTypes()
     {
         return $this->priceType;
     }
 }

