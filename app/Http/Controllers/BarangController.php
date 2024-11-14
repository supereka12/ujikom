<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
{
    $barang = Barang::all();
    return view('admin.listbarang', ['barang' => $barang]);
}


    public function show()
    {
        return view('barangs.create',);
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
            'rating' => 'required|numeric|min:0|max:5',
        ]);
    
        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }
    
        // Menggabungkan path gambar dengan data lainnya
        $data = array_merge($request->only(['nama_barang', 'merek', 'stock', 'rating']), [
            'image' => $imagePath,
        ]);
    
        // Simpan ke database
        Barang::create($data);
    
        return redirect('/listbarang')->with('success', 'Barang berhasil ditambahkan.');
    }
    


    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $barang->update($request->all());

        return redirect('/listbarang')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect('/listbarang')->with('success', 'Barang berhasil dihapus.');
    }
}
