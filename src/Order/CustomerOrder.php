<?php

namespace Vendor\Service\Order;



class CustomerOrder extends OrderInf
{
     public function description()
     {
         print "Mr/Ms {$this->customer->getName()}.You recently have made an order.<br>
         Total order's amount is {$this->price()}<br>";
     }

}
