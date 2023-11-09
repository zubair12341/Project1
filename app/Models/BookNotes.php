<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookNotes extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id', 'notes_name', 'notes_file',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

}
