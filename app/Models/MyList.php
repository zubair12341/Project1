<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    protected $fillable = [
        'book_id', 'user_id', 'content_preview',
    ];
    
    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
