<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocabularyPdf extends Model
{
    protected $fillable = [
        'book_id', 'vocab_name', 'file_path',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
