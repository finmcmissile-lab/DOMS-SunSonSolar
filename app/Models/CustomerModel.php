<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    protected $allowedFields = [
        'first_name',
        'last_name',
        'middle_name',
        'birthdate',
        'gender',
        'email',
        'phone_number',
        'address',
        'username',
        'password'
    ];

    protected $useTimestamps = false;
}
