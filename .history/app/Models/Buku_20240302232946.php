<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['judul', 'author', 'category_id', 'description'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
