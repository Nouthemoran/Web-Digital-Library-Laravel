<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koleks extends Model
{
    protected $primaryKey = 'KoleksID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['UserID', 'BukuID', 'TanggalKoleks', 'TanggalPengembalian', 'StatusKoleks', 'Role'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
