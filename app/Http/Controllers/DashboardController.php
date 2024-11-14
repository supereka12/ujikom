<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; 
use App\Models\Peminjaman; 
use App\Models\User; 

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalPeminjaman = Peminjaman::count();
        $totalUser = User::count();

        return view('admin.dashboard1', compact('totalBarang', 'totalPeminjaman', 'totalUser'));
    }
}
