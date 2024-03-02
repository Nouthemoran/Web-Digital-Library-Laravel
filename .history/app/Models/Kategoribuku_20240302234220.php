<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  extends Model
{
    protected $primaryKey = 'KategoriID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['NamaKategori'];
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
