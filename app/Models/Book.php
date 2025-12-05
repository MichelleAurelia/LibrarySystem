<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;


    protected $fillable = [
        'title',
        'image',
        'description',
        'publish_year',
        'publisher',
        'status',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_book');
    }

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    public function isAvailable(): bool
    {
        return $this->status === 'available';
    }
}
