<?php

namespace App\Models;

use App\Helpers\Constants;
use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customers';
    protected $primaryKey       = Constants::CUSTOMER_ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\CustomerEntity';
    protected $allowedFields    = [
        Constants::CUSTOMER_CREATED_BY,
        Constants::CUSTOMER_NAMES,
        Constants::CUSTOMER_LAST_NAMES,
        Constants::CUSTOMER_ADDRESS,
        Constants::CUSTOMER_LOCATE,
    ];

    protected $validationRules = [
        Constants::CUSTOMER_CREATED_BY => 'required',
        Constants::CUSTOMER_NAMES => 'required',
        Constants::CUSTOMER_LAST_NAMES => 'required',
        Constants::CUSTOMER_ADDRESS => 'required',
        Constants::CUSTOMER_LOCATE => 'required',
    ];

    protected $validationMessages = [
        Constants::CUSTOMER_CREATED_BY => [
            'required' => 'El campo es requerido'
        ],
        Constants::CUSTOMER_NAMES => [
            'required' => 'El campo es requerido'
        ],
        Constants::CUSTOMER_LAST_NAMES => [
            'required' => 'El campo es requerido'
        ],
        Constants::CUSTOMER_ADDRESS => [
            'required' => 'El campo es requerido'
        ],
        Constants::CUSTOMER_LOCATE => [
            'required' => 'El campo es requerido'
        ],
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // methods
    public function getCustomerWithCreatedByInfo() {
        return $this->select("customers.*, users.USER_NAME")
            ->join("users", "users.USER_ID = customers.CUSTOMER_CREATED_BY")
            ->findAll();
    }

}
