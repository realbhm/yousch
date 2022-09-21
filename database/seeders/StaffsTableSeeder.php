<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            [
                'staff_name' => 'john',
                'staff_surname' => 'doe',
                'staff_phone' => '0722123456',
                'staff_email' => 'jdoe@yousch.com',
                'staff_avatar' => '',
                'staff_adress' => 'paris',
                'staff_code' => '',
                'user_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_name' => 'marc',
                'staff_surname' => 'doe',
                'staff_phone' => '0700112233',
                'staff_email' => 'mdoe@yousch.com',
                'staff_avatar' => '',
                'staff_adress' => 'metz',
                'staff_code' => '',
                'user_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'staff_name' => 'jane',
                'staff_surname' => 'doe',
                'staff_phone' => '0666098778',
                'staff_email' => 'jadoe@yousch.com',
                'staff_avatar' => '',
                'staff_adress' => 'lyon',
                'staff_code' => '',
                'user_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
