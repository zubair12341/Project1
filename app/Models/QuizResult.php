<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id', 'user_id', 'result', 'status',
    ];
}
