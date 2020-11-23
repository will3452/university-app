<?php

namespace Database\Seeders;

use App\Models\LeadCharacter;
use Illuminate\Database\Seeder;

class LeadCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeadCharacter::create(['name'=>'Male']);
        LeadCharacter::create(['name'=>'Female']);
        LeadCharacter::create(['name'=>'LGBTQI+']);
    }
}
