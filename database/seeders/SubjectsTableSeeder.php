<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'subject_name' => 'Première année',
                'subject_code' => 'E1',
                'semester' => 'E1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'Deuxième année',
                'class_code' => 'E2',
                'semester' => 'E1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'Troisème année',
                'class_code' => 'E3',
                'semester' => 'E1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
