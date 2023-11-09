<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookVideos extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id', 'video_title', 'video',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

}
