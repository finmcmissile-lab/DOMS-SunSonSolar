<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index()
    {
        // Clear the customer's session data.
        session()->remove([
            'customer_id',
            'customer_name',
            'customer_username',
            'isLoggedIn',
            'user_type',
        ]);

        // Redirect to the homepage.
        return redirect()->to(base_url('/'));
    }
}
