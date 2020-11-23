<?php

namespace Database\Seeders;

use App\Models\LeadCollege;
use Illuminate\Database\Seeder;

class LeadCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeadCollege::create(['name'=>'High School']);
        LeadCollege::create(['name'=>'Berkeley']);
        LeadCollege::create(['name'=>'Reagan']);
    }
}
