<?php

require_once __DIR__ . '/vendor/autoload.php';

$someCustomer = new Vendor\Service\Customer\CommonCustomer(4);

if ($someCustomer->customerType == '1') {
    $order = new Vendor\Service\Order\CustomerOrder(4, new \Vendor\Service\PricePolicy\PrimaryPricePolicy(), $someCustomer);
    echo $order->description();
} else {
    $order = new Vendor\Service\Order\AdminOrder(4, new \Vendor\Service\PricePolicy\CommonPricePolicy(), $someCustomer);
    echo $order->description();
}








