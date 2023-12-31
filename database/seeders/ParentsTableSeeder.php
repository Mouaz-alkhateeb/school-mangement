<?php

namespace Database\Seeders;

use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Religion;
use App\Models\TypeBlood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('my__parents')->delete();
        $my_parents = new My_Parent();
        $my_parents->email = 'mohammad@gmail.com';
        $my_parents->password = Hash::make('0123456789');
        $my_parents->Name_Father = ['en' => 'mohammad alkhateeb', 'ar' => 'محمد الخطيب'];
        $my_parents->National_ID_Father = '1234567810';
        $my_parents->Passport_ID_Father = '1234567810';
        $my_parents->Phone_Father = '1234567810';
        $my_parents->Job_Father = ['en' => 'programmer', 'ar' => 'مبرمج'];
        $my_parents->Nationality_Father_id = Nationalitie::all()->unique()->random()->id;
        $my_parents->Blood_Type_Father_id = TypeBlood::all()->unique()->random()->id;
        $my_parents->Religion_Father_id = Religion::all()->unique()->random()->id;
        $my_parents->Address_Father = 'دمشق';
        $my_parents->Name_Mother = ['en' => 'shamieh', 'ar' => 'شامية'];
        $my_parents->National_ID_Mother = '1234567810';
        $my_parents->Passport_ID_Mother = '1234567810';
        $my_parents->Phone_Mother = '1234567810';
        $my_parents->Job_Mother = ['en' => 'Teacher', 'ar' => 'معلمة'];
        $my_parents->Nationality_Mother_id = Nationalitie::all()->unique()->random()->id;
        $my_parents->Blood_Type_Mother_id = TypeBlood::all()->unique()->random()->id;
        $my_parents->Religion_Mother_id = Religion::all()->unique()->random()->id;
        $my_parents->Address_Mother = 'دمشق';
        $my_parents->save();
    }
}
