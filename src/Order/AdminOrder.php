<?php

namespace Vendor\Service\Order;

class AdminOrder extends OrderInf
{
    public function description()
    {
        echo "User id {$this->customer->customerId}<br>
         User type {$this->customer->customerType}<br>
         Quantity {$this->quantity}<br>
         Total order's amount is {$this->price()}<br>";
    }
}
