<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Abia
        DB::table('states')->insert(['name'=>'Abia']);

        //Adamawa
        DB::table('states')->insert(['name'=>'Adamawa']);

        //Akwa Ibom
        DB::table('states')->insert(['name'=>'Akwa Ibom']);

        //Anambra
        DB::table('states')->insert(['name'=>'Anambra']);

        //Bauchi
        DB::table('states')->insert(['name'=>'Bauchi']);

        //Bayelsa
        DB::table('states')->insert(['name'=>'Bayelsa']);

        //Benue
        DB::table('states')->insert(['name'=>'Benue']);

        //Borno
        DB::table('states')->insert(['name'=>'Borno']);

        //Cross River
        DB::table('states')->insert(['name'=>'Cross River']);

        //Delta
        DB::table('states')->insert(['name'=>'Delta']);
    }
}
