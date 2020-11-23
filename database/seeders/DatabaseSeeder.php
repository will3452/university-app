<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            LeadCharacterSeeder::class,
            LeadCollegeSeeder::class,
            BookTypeSeeder::class,
            BookCategorySeeder::class,
            langSeeder::class
        ]);

        User::create([
            'name'=>'william galas',
            'penname'=>'elezerk',
            'email'=>'elezerk@mail.com',
            'password'=>Hash::make('password'),
            'type'=>'author'
        ]);
    }
}
