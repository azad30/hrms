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
            'name' => 'Super Admin',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'father_name' => 'Mr. Y',
            'mother_name' => 'Mrs. X',
            'dob' => Carbon::now(),
            'gender' => 'Male',
            'marital_status' => 'Single',
            'religion' => 'Hindu',
            'occupation' => 'Student',
            'occupation_details' => 'MSc in CSE; Daffodil International University',
            'educational_qualification' => 'BSc in CSE',
            'phone_number' => '+8801723000000',
            'email' => 'email@email.com',
            'nid' => '12345678909876543',
            'passport_number' => '123456789',
            'tin_number' => '12345',
            'permanent_address' => 'Joypurhat, Bangladesh',
            'emergency_contact' => 'Mr. T; Dhaka, Bangladesh',
            'active' => 1,

            'remember_token' => bcrypt(str_random(10)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
