<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;

class ScheduleService extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() === 'GET') {
            return view('schedule_service');
        }

        $rules = [
            'full_name' => 'required|max_length[150]',
            'email' => 'required|valid_email|max_length[150]',
            'phone_number' => 'required|max_length[20]',
            'service_address' => 'required',
            'service_type' => 'required|in_list[Solar Consultation,Solar Installation,Solar Maintenance,Inspection]',
            'preferred_date' => 'permit_empty|valid_date[Y-m-d]',
            'additional_notes' => 'permit_empty',
        ];

        if (! $this->validate($rules)) {
            return view('schedule_service', [
                'validation' => $this->validator,
            ]);
        }

        $preferredDate = $this->request->getPost('preferred_date');

        $data = [
            'full_name' => trim($this->request->getPost('full_name')),
            'email' => trim($this->request->getPost('email')),
            'phone_number' => trim($this->request->getPost('phone_number')),
            'service_address' => trim($this->request->getPost('service_address')),
            'service_type' => $this->request->getPost('service_type'),
            'preferred_date' => $preferredDate ?: null,
            'additional_notes' => trim(
                $this->request->getPost('additional_notes') ?? ''
            ),
            'status' => 'Pending',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $customerId = session()->get('customer_id');

        if ($customerId !== null) {
            $data['customer_id'] = $customerId;
        }

        try {
            $db = \Config\Database::connect();

            if (! $db->table('service_requests')->insert($data)) {
                throw new DatabaseException(
                    'The service request could not be saved.'
                );
            }
        } catch (DatabaseException $e) {
            log_message(
                'error',
                'Service request failed: ' . $e->getMessage()
            );

            return view('schedule_service', [
                'submission_error' =>
                    'We could not submit your request right now. Please try again.',
            ]);
        }

        return redirect()->to(site_url('schedule-service'))
            ->with(
                'service_success',
                'Your service request has been submitted successfully! We will review your preferred date and contact you.'
            );
    }
}