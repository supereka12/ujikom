<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pinjam()
    {
        return view('pinjam');
    }

    public function tentang()
    {
        return view('tentang');
    }
    
        public function music()
        {
            return view('music');
        }
    
        public function login()
        {
            return view('auth.login');
        }
    
    public function book()
    {
        return view('buku');
    }

    public function barang()
    {
        return view('member/barang');
    }


}
