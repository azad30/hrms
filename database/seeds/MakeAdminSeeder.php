<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MakeAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'father_name' => 'Admin of admin',
            'mother_name' => 'Admin of admin',
            'dob' => Carbon::now(),
            'gender' => 'male',
            'marital_status' => 'Single',
            'religion' => 'Islam',
            'occupation' => 'Business',
            'occupation_details' => 'Business Business Business',
            'educational_qualification' => 'Business Business Business',
            'phone_number' => '7969678708',
            'email' => 'email@email.com',
            'nid' => '23465546',
            'passport_number' => '23465546',
            'tin_number' => '23465546',
            'permanent_address' => 'sfddhtyt',
            'emergency_contact' => 'sfddhtyt',
            'active' => 1,

            'remember_token' => bcrypt(str_random(10)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
