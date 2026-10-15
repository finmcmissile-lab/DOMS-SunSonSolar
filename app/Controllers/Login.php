<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Login extends BaseController
{
    public function index()
    {
        // GET: Display the existing login page.
       if ($this->request->getMethod() === 'GET') {
       return view('login', [
        'registration_success' => session()->getFlashdata('registration_success'),
    ]);
}

        // POST: Read the submitted login details.
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

        // Find the customer using their username or email.
        $customerModel = new CustomerModel();

        $customer = $customerModel
            ->groupStart()
                ->where('username', $identifier)
                ->orWhere('email', $identifier)
            ->groupEnd()
            ->first();

        // Reject invalid credentials.
        if (
            ! $customer ||
            ! password_verify($password, $customer['password'])
        ) {
            return view('login', [
                'login_error' => 'Invalid username/email or password.',
            ]);
        }

        // Regenerate the session ID after successful authentication.
        session()->regenerate();

        // Store the authenticated customer's identity.
        session()->set([
            'customer_id' => $customer['customer_id'],
            'customer_name' => $customer['first_name'],
            'customer_username' => $customer['username'],
            'isLoggedIn' => true,
            'user_type' => 'Customer',
        ]);

        // Redirect to the homepage.
        return redirect()->to(base_url('/'));
    }
}
