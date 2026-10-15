<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveServiceInterestFromQuoteRequests extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('quote_requests', 'service_interest');
    }

    public function down()
    {
        $this->forge->addColumn('quote_requests', [
            'service_interest' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
        ]);
    }
}
