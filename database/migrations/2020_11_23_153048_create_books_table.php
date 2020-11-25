<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('book_category_id');
            $table->foreignId('book_type_id');
            $table->foreignId('lead_college_id');
            $table->foreignId('lead_character_id');
            $table->foreignId('language_id');
            $table->foreignId('genre_id');
            $table->text('title');
            $table->text('cover');
            $table->string('blurb')->default('3000');
            $table->string('cost')->nullable();
            $table->longText('credit');
            $table->string('is_premium')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
