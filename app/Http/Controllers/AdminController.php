<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class AdminController extends Controller
{
    // Metode untuk menampilkan halaman dashboard admin
    public function dashboard1()
    {
        return view('admin.dashboard1');
    }

    // Metode untuk menampilkan daftar barang
    public function listBarang()
    {
        $barangs = Barang::all(); 
        return view('admin.listbarang', compact('barangs')); 
    }
}
