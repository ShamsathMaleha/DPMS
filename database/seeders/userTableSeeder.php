<?php

namespace Database\Seeders;

use App\Models\Doctors;
use App\Models\User;
use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


        public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin'
        ]);

    //    $user= User::create([
    //         'name' => 'doctor',
    //         'email' => 'doctor@gmail.com',
    //         'password' => bcrypt('12345'),
    //         'role' => 'doctor'
    //     ]);

    //     $user->doctor()->create([
    //         'specialist_id'=>1,
    //         'visit_fee'=>100,
    //         'chamber'=>'dhaka',
    //         'about'=>'about description',
    //         'perDay_visit'=>10
    //     ]);

        // Doctors::create([
        //     'user_id'=>$user->id,
        //     'specialist'=>'test',
        //     'visit_fee'=>100,
        //     'chamber'=>'dhaka',
        //     'about'=>'about description'

        // ]);

    //    $user1= User::create([
    //         'name' => 'Patient',
    //         'email' => 'patient@gmail.com',
    //         'password' => bcrypt('12345'),
    //         'role' => 'patient'
    //     ]);


    //     $user1->patient()->create([
    //         'address'=>'test',
    //         'age'=>100,
    //         'gender'=>'text',
    //         'about'=>'about description'

    //         ]);
    }

}
