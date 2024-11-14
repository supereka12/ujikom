<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function barangDipinjam()
    {
        return $this->belongsToMany(Barang::class, 'peminjaman')
            ->withPivot('tanggal_peminjaman', 'tanggal_pengembalian')
            ->withTimestamps();
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

}

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}