<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koleksipribadi extends Model
{
    protected $primaryKey = 'KoleksiID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['UserID', 'BukuID', 'TanggalKolekspribadi', 'TanggalPengembalian', 'StatusKolekspribadi', 'Role'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
