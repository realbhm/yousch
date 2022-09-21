<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'class_name' => 'Première année',
                'class_code' => 'E1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'Deuxième année',
                'class_code' => 'E2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'Troisème année',
                'class_code' => 'E3',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
