<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campus')->insert([
            [
                'campus_name' => 'estiam_paris',
                'campus_location' => 'paris',
                'campus_phone' => '0722123456',
                'campus_email' => 'paris@estiam.com',
                'staff_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'campus_name' => 'estiam_metz',
                'campus_location' => 'metz',
                'campus_phone' => '0722123456',
                'campus_email' => 'metz@estiam.com',
                'staff_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'campus_name' => 'estiam_lyon',
                'campus_location' => 'lyon',
                'campus_phone' => '0722123456',
                'campus_email' => 'lyon@estiam.com',
                'staff_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
