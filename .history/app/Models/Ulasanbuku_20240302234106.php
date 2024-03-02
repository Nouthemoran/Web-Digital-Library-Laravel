<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ulasanbuku extends Model
{
    protected $primaryKey = 'UlasanID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['UserID', 'BukuID', 'Ulasan', 'Rating', 'StatusUlasan', 'Role'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
