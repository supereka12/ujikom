<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    // Menampilkan halaman barang
    public function showBarang()
    {
        // Ambil semua barang yang tersedia
        $barangs = Barang::all();

        // Tampilkan ke view elektronik
        return view('elektronik', compact('barangs'));
    }

    // Menampilkan form untuk peminjaman barang
    public function showPeminjaman($barangId)
    {
        $barang = Barang::findOrFail($barangId);
        return view('peminjaman', compact('barang'));
    }

    // Proses peminjaman barang
    public function storePeminjaman(Request $request)
    {
       

        // Simpan data peminjaman

        Peminjaman::create([
            'user_id' => Auth::id(),
            'barang_id' => $request->barang_id,
            'tanggal_kembali' => $request->tanggal_kembali,
            'jumlah' => $request->jumlah,
            'status' => 'menunggu di ijinkan',
        ]);


        // Kurangi stock barang
        $barang = Barang::where("id", $request->barang_id)->first();
        $barang->stock -= $request->jumlah;
        $barang->save();

        return redirect()->route('elektronik')->with('success', 'Barang berhasil dipinjam');
    }

    public function showPeminjamanList()
    {
        $peminjaman = Peminjaman::with(['barang', 'user'])->get();
        return view('admin.listpinjam', compact('peminjaman'));
    }
    public function memberlist()
    {
        $peminjaman = Peminjaman::with(['barang', 'user'])->get();
        return view('member.pinjamlist', compact('peminjaman'));
    }

    public function updateStatus(Request $request, $id)
    {
    $request->validate([
        'status' => 'required|string'
    ]);

    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->status = $request->status;
    $peminjaman->save();

    return redirect()->route('admin.listpinjam')->with('success', 'Status peminjaman berhasil diperbarui.');
    }

    public function deletePeminjaman($id)
{
    // Find the peminjaman record by ID
    $peminjaman = Peminjaman::findOrFail($id);

    // Delete the record
    $peminjaman->delete();

    // Redirect back to the list with a success message
    return redirect()->route('admin.listpinjam')->with('success', 'Peminjaman berhasil dihapus.');
}


}
