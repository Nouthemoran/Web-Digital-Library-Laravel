<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['Judul','KategoriID', 'Penulis', 'Penerbit', ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
