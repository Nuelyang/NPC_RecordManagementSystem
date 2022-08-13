<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wards')->insert(['lga_id'=>'1', 'name'=>'Wasagu/Danko']);
        DB::table('wards')->insert(['lga_id'=>'1', 'name'=>'Ajaokuta']);
        DB::table('wards')->insert(['lga_id'=>'1', 'name'=>'Yagba East']);
        DB::table('wards')->insert(['lga_id'=>'2', 'name'=>'Oke Ero']);
        DB::table('wards')->insert(['lga_id'=>'2', 'name'=>'Akwanga']);
        DB::table('wards')->insert(['lga_id'=>'3', 'name'=>'Keffi']);
        DB::table('wards')->insert(['lga_id'=>'4', 'name'=>'Agwara']);
        DB::table('wards')->insert(['lga_id'=>'4', 'name'=>'Kontagora']);
        DB::table('wards')->insert(['lga_id'=>'5', 'name'=>'Paikoro']);
        DB::table('wards')->insert(['lga_id'=>'5', 'name'=>'Aiyedaade']);
        DB::table('wards')->insert(['lga_id'=>'6', 'name'=>'Shendam']);
        DB::table('wards')->insert(['lga_id'=>'7', 'name'=>'Eleme']);
        DB::table('wards')->insert(['lga_id'=>'8', 'name'=>'Ogu/Bolo']);
        DB::table('wards')->insert(['lga_id'=>'9', 'name'=>'Bodinga']);
        DB::table('wards')->insert(['lga_id'=>'10', 'name'=>'Kware']);
    }
}
