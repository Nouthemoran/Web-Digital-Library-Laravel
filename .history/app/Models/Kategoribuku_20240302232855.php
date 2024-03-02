<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'PeminjamanID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['NamaKategori'];
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
