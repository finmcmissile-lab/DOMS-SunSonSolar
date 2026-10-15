<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuoteAndServiceRequestTables extends Migration
{
    public function up()
    {
        // Table for customers requesting a free solar quote.
        $this->forge->addField([
            'quote_request_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'customer_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'full_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'phone_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'property_address' => [
                'type' => 'TEXT',
            ],
            'property_type' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'monthly_electricity_bill' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true,
            ],
            'service_interest' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'project_details' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
                'default'    => 'Pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('quote_request_id', true);
        $this->forge->addKey('customer_id');
        $this->forge->addForeignKey(
            'customer_id',
            'customers',
            'customer_id',
            'SET NULL',
            'CASCADE'
        );
        $this->forge->createTable('quote_requests', true);

        // Table for customers requesting a service.
        $this->forge->addField([
            'service_request_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'customer_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'full_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'phone_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'service_address' => [
                'type' => 'TEXT',
            ],
            'service_type' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'preferred_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'additional_notes' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
                'default'    => 'Pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('service_request_id', true);
        $this->forge->addKey('customer_id');
        $this->forge->addForeignKey(
            'customer_id',
            'customers',
            'customer_id',
            'SET NULL',
            'CASCADE'
        );
        $this->forge->createTable('service_requests', true);
    }

    public function down()
    {
        // Remove these tables if this migration is rolled back.
        $this->forge->dropTable('service_requests', true);
        $this->forge->dropTable('quote_requests', true);
    }
}
