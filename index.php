<?php

require_once __DIR__.'/vendor/autoload.php';

check($value){
    /*
     * some checking function for cleaning entering datas
     */
}
$username = check($_POST['username']);
$password = check($_POST['password']);
$quantity = check($_POST['quantity']);
$qry = "SELECT id FROM `users` WHERE `Username` = '$username' AND `Password` = '$password'";
$id = mysql_query($qry);

$someCustomer = new Vendor\Service\Customer\CommonCustomer($id);

if ($someCustomer->customerType == '1') {
    $order = new Vendor\Service\Order\CustomerOrder($quantity, new \Vendor\Service\PricePolicy\PrimaryPricePolicy(), $someCustomer);
    echo $order->description();
} else {
    $order = new Vendor\Service\Order\AdminOrder($quantity, new \Vendor\Service\PricePolicy\CommonPricePolicy(), $someCustomer);
    echo $order->description();
}
