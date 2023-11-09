<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetails extends Model
{
    protected $fillable = [
        'book_id', 'cover_image', 'intro_video',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    
}
