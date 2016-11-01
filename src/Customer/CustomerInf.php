<?php

namespace Vendor\Service\Customer;

abstract class CustomerInf
{
    /**
     * @var int
     * @var string $customerType;
     * @var string $customerName;
     */
    public $customerId;
    public $customerName;
    public $customerType;

    /**
     * @param int $cusId
     */
    abstract public function __construct($cusId)
    {
        $this->customerId = $cusId;
        /*
         * @var int $customerId
         * customer nme and type are loading from database
         */
        $this->customerName = 'John';
        $this->customerType = '1';
    }

    abstract public function getName();
}
