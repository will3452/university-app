<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(['name'=>'Teen and Young Adult']);
        DB::table('genres')->insert(['name'=>'New Adult']);
        DB::table('genres')->insert(['name'=>'Romance ']);
        DB::table('genres')->insert(['name'=>'Detective and Mystery']);
        DB::table('genres')->insert(['name'=>'Action']);
        DB::table('genres')->insert(['name'=>'Historical']);
        DB::table('genres')->insert(['name'=>'LGBTQIA+']);
        // DB::table('genres')->insert(['name'=>'']);
    }
}
