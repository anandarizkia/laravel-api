<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'published_year', 'genre'];

    public static function rules()
    {
        return[
            'title' => 'required|string|max:255',
            'published_year' => 'required|integer|min:1900|max:'.date('Y'),
        ];
    }

    publIc function authors()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

}