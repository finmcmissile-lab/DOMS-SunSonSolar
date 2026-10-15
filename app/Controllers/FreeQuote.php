<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;

class FreeQuote extends BaseController
{
    public function index()
    {
        // Show the form when the visitor opens the page.
        if ($this->request->getMethod() === 'GET') {
            return view('free_quote');
        }

        // Validate the submitted form.
        $rules = [
            'full_name' => 'required|max_length[150]',
            'email' => 'required|valid_email|max_length[150]',
            'phone_number' => 'required|max_length[20]',
            'property_address' => 'required',
            'property_type' => 'required|in_list[House,Apartment,Commercial,Other]',
            'monthly_electricity_bill' => 'permit_empty|decimal|greater_than_equal_to[0]|less_than_equal_to[99999999.99]',
            'project_details' => 'permit_empty',
        ];

        if (! $this->validate($rules)) {
            return view('free_quote', [
                'validation' => $this->validator,
            ]);
        }

        // Prepare the quote request for saving.
        $bill = $this->request->getPost('monthly_electricity_bill');

        $data = [
            'full_name' => trim($this->request->getPost('full_name')),
            'email' => trim($this->request->getPost('email')),
            'phone_number' => trim($this->request->getPost('phone_number')),
            'property_address' => trim($this->request->getPost('property_address')),
            'property_type' => $this->request->getPost('property_type'),
            'monthly_electricity_bill' => ($bill === '' || $bill === null)
                ? null
                : $bill,
            'project_details' => trim(
                $this->request->getPost('project_details') ?? ''
            ),
            'status' => 'Pending',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Attach the customer ID when a customer is logged in.
        $customerId = session()->get('customer_id');

        if ($customerId !== null) {
            $data['customer_id'] = $customerId;
        }

        // Save the request to the test database.
        try {
            $db = \Config\Database::connect();

            if (! $db->table('quote_requests')->insert($data)) {
                throw new DatabaseException(
                    'The quote request could not be saved.'
                );
            }
        } catch (DatabaseException $e) {
            log_message(
                'error',
                'Free quote request failed: ' . $e->getMessage()
            );

            return view('free_quote', [
                'submission_error' =>
                    'We could not submit your request right now. Please try again.',
            ]);
        }

        // Redirect after submission to prevent accidental resubmission.
        return redirect()->to(site_url('free-quote'))
            ->with(
                'quote_success',
                'Your quote request has been submitted successfully!'
            );
    }
}
