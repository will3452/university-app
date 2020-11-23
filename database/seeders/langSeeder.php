<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class langSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['name'=>'Filipino']);
        Language::create(['name'=>'English']);
    }
}
