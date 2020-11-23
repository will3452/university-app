<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::create(['name'=>'Novel']);
        BookCategory::create(['name'=>'Visual Novel']);
        BookCategory::create(['name'=>'Comic book']);
    }
}
