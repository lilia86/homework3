<?php

namespace Vendor\Service\Customer;

class CommonCustomer implements CustomerInf
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
    public function __construct($cusId)
    {
        $this->customerId = $cusId;
        /*
         * @var int $customerId
         * customer nme and type are loading from database
         */
        $this->customerName = 'John';
        $this->customerType = '1';
    }

    public function getName()
    {
        return $this->customerName;
    }
}
