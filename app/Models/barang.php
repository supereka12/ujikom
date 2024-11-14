<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'merek',
        'image',
        'stock',
        'rating',
    ];

    public function peminjamans()
{
    return $this->hasMany(Peminjaman::class);
}


    public function peminjam()
    {
        return $this->belongsToMany(User::class, 'peminjaman')
            ->withPivot('tanggal_peminjaman', 'tanggal_pengembalian')
            ->withTimestamps();
    }
}
