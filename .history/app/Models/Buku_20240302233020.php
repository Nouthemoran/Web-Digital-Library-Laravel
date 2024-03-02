<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['Judul', 'Penulis', 'kategoriID', 'description'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
