<?php

namespace Vendor\Service\Order;

use Vendor\Service\PricePolicy\PricePolicyInt;
use Vendor\Service\Customer\CommonCustomer;

abstract class OrderInf
{
    /**
     * @var int $quantity
     * @var object $customerPriceType
     * @var int $price
     * @var string customerName
     *
     */
    public $quantity;
    protected $customerPricePolicy;
    public $price;
    public $customer;

    /**
     * @param int $quantity
     * @param PricePolicyInt object
     * @param CommonCustomer object
     */
    public function __construct($quantity, PricePolicyInt $policy, CommonCustomer $user)
    {
        $this->quantity = $quantity;
        $this->customerPricePolicy = $policy;
        $this->price = $this->customerPricePolicy->getPrice($this);
        $this->customer = $user;
    }

    public function price()
    {
        return $this->customerPricePolicy->getPrice($this);

    }

    public function getQuantity() {
         return $this->quantity;
    }

    abstract public function description();

}

