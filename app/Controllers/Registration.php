<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Database\Exceptions\DatabaseException;

class Registration extends BaseController
{
    public function index()
    {

        // GET: Show the public customer registration form.
        if ($this->request->getMethod() === 'GET') {
            return view('register', [
                'validation' => null,
                'registration_error' => null,
                'oldInput' => [],
                'selectedGender' => '',
            ]);
        }


        // POST: Get submitted form data.
        $data = $this->request->getPost();

        // Public registration is for customers only.
        $rules = [
            'first_name'       => 'required|max_length[50]',
            'last_name'        => 'required|max_length[50]',
            'birthdate'        => 'required|valid_date[Y-m-d]',
            'gender'           => 'required|in_list[Male,Female,Other]',
            'email'            => 'required|valid_email|max_length[100]',
            'phone_number'     => 'required|regex_match[/^[0-9]{11}$/]',
            'address'          => 'required|max_length[255]',
            'username'         => 'required|max_length[50]',
            'password'         => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
        ];

        if (! $this->validate($rules)) {
            return view('register', [
                'validation' => $this->validator,
            ]);
        }

        // Prepare customer information.
        $account = [
            'first_name'   => trim($data['first_name']),
            'last_name'    => trim($data['last_name']),
            'middle_name'  => trim($data['middle_name'] ?? ''),
            'birthdate'    => $data['birthdate'],
            'gender'       => $data['gender'],
            'email'        => trim($data['email']),
            'phone_number' => trim($data['phone_number']),
            'address'      => trim($data['address']),
            'username'     => trim($data['username']),
            'password'     => password_hash(
                $data['password'],
                PASSWORD_DEFAULT
            ),
        ];

        // Save only to the customers table.
        $model = new CustomerModel();

        try {
            if (! $model->insert($account)) {
                return view('register', [
                    'validation' => $model->errors(),
                ]);
            }
        } catch (DatabaseException $e) {
            log_message(
                'error',
                'Customer registration database error: ' . $e->getMessage()
            );

            return view('register', [
                'registration_error' =>
                    'We could not create your account. Your email or username may already be registered.',
            ]);
        }

        session()->setFlashdata(
    'registration_success',
    'Your account has been created successfully. Please log in.'
);

return redirect()->to(site_url('login'));
    }
}