<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model 
{
    protected $fillable = [
        'title', 'author', 'book_protagonist', 'book_version', 'publisher_date',
        'book_total_pages', 'book_summary', 'free_notes',
    ];

    public function details()
    {
        return $this->hasOne(BookDetails::class);
    }

    public function quiz()
    {
        return $this->hasMany(BookQuiz::class);
    }

    public function vocabularyPdfs()
    {
        return $this->hasMany(VocabularyPdf::class); // Specify the foreign key
    }

    public function content()
    {
        return $this->hasMany(BookContent::class);
    }

    public function videos()
    {
        return $this->hasMany(BookVideos::class);
    }

    public function genres()
    {
        return $this->hasMany(BookGenre::class);
    }

    public function mylist()
    {
        return $this->belongsTo(MyList::class);
    }

    public function note()
    {
        return $this->hasMany(Note::class);
    }
    
}
