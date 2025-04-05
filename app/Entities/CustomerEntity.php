<?php

namespace App\Entities;

use App\Helpers\Constants;
use CodeIgniter\Entity\Entity;

class CustomerEntity extends Entity
{
    protected $attributes = [
        Constants::CUSTOMER_ID => null,
        Constants::CUSTOMER_NAMES => null,
        Constants::CUSTOMER_LAST_NAMES => null,
        Constants::CUSTOMER_ADDRESS => null,
        Constants::CUSTOMER_LOCATE => null,
        Constants::CUSTOMER_CREATED_AT => null,
        Constants::CUSTOMER_CREATED_BY => null,
        "USER_NAME" => null
    ];
}
