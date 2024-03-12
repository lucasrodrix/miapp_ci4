<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run(){
        $data = [
            ['name' => 'Eletronics'],
            ['name' => 'Shoes'],
            ['name' => 'Sports']
        ];
        $this->db->table('categories')->insertBatch($data);
    }
}
