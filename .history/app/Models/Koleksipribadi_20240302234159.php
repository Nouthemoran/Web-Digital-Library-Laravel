<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koleksp extends Model
{
    protected $primaryKey = 'KolekspID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['UserID', 'BukuID', 'TanggalKoleksp', 'TanggalPengembalian', 'StatusKoleksp', 'Role'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
