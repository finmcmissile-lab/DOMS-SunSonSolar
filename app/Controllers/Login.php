<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\EmployeeModel;

class Login extends BaseController
{
    public function index()
    {
        // Display the login page.
        if ($this->request->getMethod() === 'GET') {
            return view('login', [
    'registration_success' => session()->getFlashdata('registration_success'),
    'login_required' => session()->getFlashdata('login_required'),
]);
        }

        // Read the submitted login credentials.
        $identifier = trim($this->request->getPost('username') ?? '');
        $password = $this->request->getPost('password') ?? '';

        // Validate the submitted fields.
        $rules = [
            'username' => 'required|max_length[100]',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return view('login', [
                'login_error' => 'Please enter your username or email and password.',
            ]);
        }

        // Check the customers table first.
        $customerModel = new CustomerModel();

        $customer = $customerModel
            ->groupStart()
                ->where('username', $identifier)
                ->orWhere('email', $identifier)
            ->groupEnd()
            ->first();

        if ($customer && password_verify($password, $customer['password'])) {
            session()->regenerate();

            session()->set([
                'customer_id' => $customer['customer_id'],
                'customer_name' => $customer['first_name'],
                'customer_username' => $customer['username'],
                'isLoggedIn' => true,
                'user_type' => 'Customer',
            ]);

            return redirect()->to(base_url('/'));
        }

        // If no valid customer login was found, check employees.
        $employeeModel = new EmployeeModel();

        $employee = $employeeModel
            ->groupStart()
                ->where('username', $identifier)
                ->orWhere('email', $identifier)
            ->groupEnd()
            ->first();

        if ($employee && password_verify($password, $employee['password'])) {
            session()->regenerate();

            session()->set([
                'employee_id' => $employee['employee_id'],
                'employee_name' => $employee['first_name'],
                'employee_username' => $employee['username'],
                'employee_department' => $employee['department'],
                'isLoggedIn' => true,
                'user_type' => 'Employee',
            ]);

            return redirect()->to(base_url('/'));
        }

        // Reject credentials that match neither account type.
        return view('login', [
            'login_error' => 'Invalid username/email or password.',
        ]);
    }
}