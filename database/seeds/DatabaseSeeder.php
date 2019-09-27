<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('students')->insert([
            ['rollNo'=>'d00474','name'=>'Dang Dinh Si','age'=>26],
            ['rollNo'=>'d00474','name'=>'Dang Dinh Si','age'=>26],
            ['rollNo'=>'d00474','name'=>'Dang Dinh Si','age'=>26],
            ['rollNo'=>'d00474','name'=>'Dang Dinh Si','age'=>26],
            ['rollNo'=>'d00474','name'=>'Dang Dinh Si','age'=>26],
        ]);*/
        DB::table('subjects')->insert([
            ['subject-id'=>'m1','name'=>'Toan'],
            ['subject-id'=>'m2','name'=>'Ly'],
            ['subject-id'=>'m3','name'=>'Hoa'],
            ['subject-id'=>'m4','name'=>'Van'],
            ['subject-id'=>'m5','name'=>'Su'],
        ]);
    }
}
