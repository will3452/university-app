<?php

namespace Database\Seeders;

use App\Models\BookType;
use Illuminate\Database\Seeder;

class BookTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookType::create(['name'=>'Series']);
        BookType::create(['name'=>'Novel']);
        BookType::create(['name'=>'Graphic Novel']);
        BookType::create(['name'=>'Anthology']);
        BookType::create(['name'=>'Comic Book']);

    }
}
