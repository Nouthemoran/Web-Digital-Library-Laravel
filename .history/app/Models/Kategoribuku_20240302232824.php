<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['Namakategori'];
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
