<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookContent extends Model
{
    use HasFactory; 

    protected $fillable = [
        'book_id', 'document_name', 'document_file',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
