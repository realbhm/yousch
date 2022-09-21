<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
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
                'course_name' => 'Php',
                'course_code' => 'PHPADV',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Business English',
                'course_code' => 'BsnnADV',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Java',
                'course_code' => 'JVADV',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
