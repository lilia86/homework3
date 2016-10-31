<?php

namespace Vendor\Service\PricePolicy;

use Vendor\Service\Order\OrderInf;

abstract class PricePolicyInt
{
    /**
     * @param OrderInf object
     */
    abstract public function getPrice(OrderInf $order);
    abstract public function getPriceTypes();
}
