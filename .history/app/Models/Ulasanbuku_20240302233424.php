<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  extends Model
{
    protected $primaryKey = 'ID'; // Menyesuaikan nama kolom primary key

    protected $fillable = ['UserID', 'BukuID', 'Tanggal', 'TanggalPengembalian', 'Status', 'Role'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
