<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'gategory_id'
    ];

    public function author() {
        return $this->belongsTo(Author::class);
    }
    public function gategories() {
        return $this->belongsTo(Gategory::class);
    }
}
