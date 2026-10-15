<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';

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
        'password',
        'department'
    ];

    protected $useTimestamps = false;
}
