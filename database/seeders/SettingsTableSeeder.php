<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['key' => 'current_session', 'value' => '2023-2024'],
            ['key' => 'school_title', 'value' => 'Mouaz_School'],
            ['key' => 'school_name', 'value' => 'Mouaz Alkhateeb International Schools'],
            ['key' => 'end_first_term', 'value' => '01-12-2023'],
            ['key' => 'end_second_term', 'value' => '01-03-2024'],
            ['key' => 'phone', 'value' => '0969040382'],
            ['key' => 'address', 'value' => 'دمشق'],
            ['key' => 'school_email', 'value' => 'moaz.alkhateeb99@gmail.com'],
            ['key' => 'logo', 'value' => '1.jpg'],
        ];

        DB::table('settings')->insert($data);
    }
}
