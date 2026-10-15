<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ServiceEmployeesSeeder extends Seeder
{
    public function run()
    {
        // Safety check: only allow the test database.
        if ($this->db->getDatabase() !== 'sunson_solar_test') {
            throw new \RuntimeException(
                'Wrong database. No employee records were inserted.'
            );
        }

        $employees = [
            [
                'first_name'   => 'Apollo',
                'last_name'    => 'Santos',
                'middle_name'  => '',
                'birthdate'    => '2000-01-15',
                'gender'       => 'Male',
                'email'        => 'apollo@gmail.com',
                'phone_number' => '09123456798',
                'address'      => 'Sun Son Solar Office',
                'username'     => 'apollo',
                'password'     => password_hash('apollo', PASSWORD_DEFAULT),
                'department'   => 'Technical',
            ],
            [
                'first_name'   => 'Sunny',
                'last_name'    => 'Ray',
                'middle_name'  => '',
                'birthdate'    => '2000-06-21',
                'gender'       => 'Male',
                'email'        => 'sunny.ray@gmail.com',
                'phone_number' => '09123456789',
                'address'      => 'Sun Son Solar Office',
                'username'     => 'sunnyray',
                'password'     => password_hash('sunnyray', PASSWORD_DEFAULT),
                'department'   => 'Consultation',
            ],
        ];

        foreach ($employees as $employee) {
            $existing = $this->db->table('employees')
                ->groupStart()
                    ->where('username', $employee['username'])
                    ->orWhere('email', $employee['email'])
                ->groupEnd()
                ->countAllResults();

            if ($existing > 0) {
                echo "SKIPPED: {$employee['username']} already exists.\n";
                continue;
            }

            $this->db->table('employees')->insert($employee);

            echo "CREATED: {$employee['username']} "
                . "({$employee['department']}).\n";
        }
    }
}
