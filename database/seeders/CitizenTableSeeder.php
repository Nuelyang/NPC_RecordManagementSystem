<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitizenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //RECORD 1
        DB::table('citizens')->insert([
            'fullname' => 'Mojisola Gbadamosi',
            'gender'   => 'Female',
            'address'  => 'Igbirogba Layout VI, Lagos',
            'phone'    => '08025638498',
            'ward_id'  => '1',
        ]); 


        //RECORD 2
        DB::table('citizens')->insert([
            'fullname' => 'James Adigun',
            'gender'   => 'Male',
            'address'  => 'Okota, Lagos',
            'phone'    => '08025634498',
            'ward_id'  => '1'
        ]); 


        //RECORD 3
        DB::table('citizens')->insert([
            'fullname' => 'Bright Collins',
            'gender'   => 'Male',
            'address'  => 'Ibadan Oyo',
            'phone'    => '08024538498',
            'ward_id'  => '2',
        ]); 


        //RECORD 4
        DB::table('citizens')->insert([
            'fullname' => 'Kuramo Omole',
            'gender'   => 'Male',
            'address'  => 'Oloriomo Mosimola Akure',
            'phone'    => '07025638498',
            'ward_id'  => '3',
        ]); 


        //RECORD 5
        DB::table('citizens')->insert([
            'fullname' => 'Mojisola Gbadamosi',
            'gender'   => 'Female',
            'address'  => 'Igbirogba Layout VI, Lagos',
            'phone'    => '08025638498',
            'ward_id'  => '1',
        ]); 


        //RECORD 6
        DB::table('citizens')->insert([
            'fullname' => 'Oluomo Kariot',
            'gender'   => 'Female',
            'address'  => 'Igbirogba Layout VI, Lagos',
            'phone'    => '08025638498',
            'ward_id'  => '6',
        ]); 

        //RECORD 7
        DB::table('citizens')->insert([
            'fullname' => 'Kiki Lariot',
            'gender'   => 'Male',
            'address'  => 'Oloriomo Mosimola Akure',
            'phone'    => '08025638498',
            'ward_id'  => '7',
        ]); 

        //RECORD 8
        DB::table('citizens')->insert([
            'fullname' => 'segun Gbadamosi',
            'gender'   => 'Female',
            'address'  => 'Igbirogba Layout VI, Lagos',
            'phone'    => '08025638498',
            'ward_id'  => '5',
        ]); 


        //RECORD 9
        DB::table('citizens')->insert([
            'fullname' => 'Bamz Krio',
            'gender'   => 'Male',
            'address'  => 'Egbeda Idimu',
            'phone'    => '09345638498',
            'ward_id'  => '10',
        ]); 


        //RECORD 10
        DB::table('citizens')->insert([
            'fullname' => 'Phillip James',
            'gender'   => 'Female',
            'address'  => 'Larryson, Korrly',
            'phone'    => '09025638498',
            'ward_id'  => '3',
        ]); 


    }
}
