<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class LgasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //ABIA
        DB::table('lgas')->insert(['state_id'=>'1', 'name'=>'Aba South']); 
        
        //ADAMAWA
        DB::table('lgas')->insert(['state_id'=>'2', 'name'=>'Madagali']);
        
        //AKWA IBOM 
        DB::table('lgas')->insert(['state_id'=>'3', 'name'=>'Obot Akara']);

        //ANAMBRA
        DB::table('lgas')->insert(['state_id'=>'4', 'name'=>'Oyi']);

        //BAUCHI
        DB::table('lgas')->insert(['state_id'=>'5', 'name'=>'Itas/Gadau']);
        DB::table('lgas')->insert(['state_id'=>'5', 'name'=>"Jama'are"]);

        //BAYELSA
        DB::table('lgas')->insert(['state_id'=>'6', 'name'=>'Ekeremor']); 

        //BENUE
        DB::table('lgas')->insert(['state_id'=>'7', 'name'=>'Vandeikya']);

        //BORNO
        DB::table('lgas')->insert(['state_id'=>'8', 'name'=>'Abadam']); 

        //CROSS RIVER
        DB::table('lgas')->insert(['state_id'=>'9', 'name'=>'Bekwarra']); 

        //DELTA 
        DB::table('lgas')->insert(['state_id'=>'10', 'name'=>'Bomadi']); 
    }
}
