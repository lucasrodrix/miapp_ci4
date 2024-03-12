<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPriceProducts extends Migration
{
    public function up(){
        $fields = [
            'price' =>[
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'after' => 'name',
                'null' => false
            ]
        ];
        $this->forge->addColumn('products', $fields);
    }

    public function down(){
        $this->forge->dropColumn('products','price');
    }
}
