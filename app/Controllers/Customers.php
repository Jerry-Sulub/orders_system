<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Helpers\Constants;
use App\Models\CustomerModel;

class Customers extends BaseController
{
    private const SECTION = 'Clientes';

    public function index()
    {
        $customersModel = new CustomerModel();
        $data = [
            'customers' => $customersModel->getCustomerWithCreatedByInfo(),
            'section' => self::SECTION,
        ];
        
        return view('customers/index', $data);
    }

    public function createView() {
        return view('customers/create', ['section' => self::SECTION]);
    }

    public function store() {
        $customerEntity = new \App\Entities\CustomerEntity();
        $customerEntity->fill([
            Constants::CUSTOMER_CREATED_BY => $this->request->getPost('createdBy'),
            Constants::CUSTOMER_NAMES => $this->request->getPost('names'),
            Constants::CUSTOMER_LAST_NAMES => $this->request->getPost('lastNames'),
            Constants::CUSTOMER_ADDRESS => $this->request->getPost('address'),
            Constants::CUSTOMER_LOCATE => $this->request->getPost('locate'),
        ]);

        $customersModel = new CustomerModel();
        if (!$customersModel->insert($customerEntity))
        {
            return redirect()->back()->withInput()->with('errors', $customersModel->errors());
        }

        $session = \Config\Services::session();
        $session->setFlashdata('message', 'Customer created successfully');
        return redirect()->to('/customers');
    }

    public function updateView() {
        return view('customers/update');
    }

    public function update() {
        $data = [
            Constants::CUSTOMER_CREATED_BY => $this->request->getPost('createdBy'),
            Constants::CUSTOMER_NAMES => $this->request->getPost('names'),
            Constants::CUSTOMER_LAST_NAMES => $this->request->getPost('lastNames'),
            Constants::CUSTOMER_ADDRESS => $this->request->getPost('address'),
            Constants::CUSTOMER_LOCATE => $this->request->getPost('locate'),
        ];

        $customersModel = new CustomerModel();
        if (!$customersModel->update($this->request->getPost('id'), $data))
        {
            var_dump($customersModel->errors());
        }

        $session = \Config\Services::session();
        $session->setFlashdata('message', 'Customer updated successfully');
        return redirect()->to('/customers');
    }
}
