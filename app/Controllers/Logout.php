<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index()
    {
        // Remove both customer and employee session data.
        session()->remove([
            'customer_id',
            'customer_name',
            'customer_username',
            'employee_id',
            'employee_name',
            'employee_username',
            'employee_department',
            'isLoggedIn',
            'user_type',
        ]);

        // Redirect to the homepage.
        return redirect()->to(base_url('/'));
    }
}