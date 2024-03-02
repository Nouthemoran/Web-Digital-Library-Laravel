<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'PeminjamanID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['Judul','KategoriID', 'Penulis', 'Penerbit', 'TahunTerbit' ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
