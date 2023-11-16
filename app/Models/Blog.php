<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', #judul
        'content', #konten
        'image', #cover
        'tags', #tag
        'author', #penulis
    ];
}
