<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookQuiz extends Model
{
    protected $fillable = [
        'book_id', 'quiz_name', 'question', 'option_1', 'option_2', 'option_3', 'option_4', 'correct_option',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    
}
