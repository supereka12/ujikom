@extends('navbar1')

@section('konek')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">List Peminjaman</h1>

    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b">ID</th>
                <th class="px-6 py-3 border-b">Nama Barang</th>
                <th class="px-6 py-3 border-b">Nama User</th>
                <th class="px-6 py-3 border-b">Tanggal Peminjaman</th>
                <th class="px-6 py-3 border-b">Status</th>
                <th class="px-6 py-3 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    <td class="px-6 py-4 border-b">{{ $item->id }}</td>
                    <td class="px-6 py-4 border-b">{{ $item->barang->nama_barang }}</td>
                    <td class="px-6 py-4 border-b">{{ $item->user->name }}</td>
                    <td class="px-6 py-4 border-b">{{ $item->tanggal_peminjaman }}</td>
                    <td class="px-6 py-4 border-b">
                        <form action="{{ route('peminjaman.updateStatus', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select name="status" onchange="this.form.submit()" class="border border-gray-300 p-2 rounded">
                                <option value="pinjam" {{ $item->status == 'pinjam' ? 'selected' : '' }}>Pinjam</option>
                                <option value="kembali" {{ $item->status == 'kembali' ? 'selected' : '' }}>Kembali</option>
                                <option value="menunggu di ijinkan" {{ $item->status == 'menunggu di ijinkan' ? 'selected' : '' }}>Menunggu diijinkan</option>
                            </select>
                        </form>
                    </td>
                    <td class="px-6 py-4 border-b">
                         <!-- Delete Button -->
            <form action="{{ route('admin.peminjaman.delete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<x-footer></x-footer>

@endsection
