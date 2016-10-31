<?php

namespace Vendor\Service\Order;

class CustomerOrder extends OrderInf
{
    public function description()
    {
        echo "Mr/Ms {$this->customer->getName()}.You recently have made an order.<br>
         Total order's amount is {$this->price()}<br>";
    }
}
