<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    //scopes

    public function scopeRegular($q){
        return $q->where('is_premium','no');
    }

    public function scopePremium($q){
        return $q->where('is_premium','yes');
    }
    //relations
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(BookCategory::class, 'book_category_id');
    }

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function leadCharacter(){
        return $this->belongsTo(LeadCharacter::class, 'lead_character_id');
    }

    public function leadCollege(){
        return $this->belongsTo(LeadCollege::class, 'lead_college_id');
    }
}
