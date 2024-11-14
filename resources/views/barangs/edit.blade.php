@extends('navbar1')

@section('konek')
    <h1 class="text-3xl font-bold mb-8">Edit Barang</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('barang.update', $barang->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')

        <!-- Nama Barang -->
        <div class="mb-4">
            <label for="nama_barang" class="block font-semibold">Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}" class="w-full border border-gray-300 p-2 rounded">
            @error('nama_barang')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Merek -->
        <div class="mb-4">
            <label for="merek" class="block font-semibold">Merek</label>
            <input type="text" name="merek" value="{{ old('merek', $barang->merek) }}" class="w-full border border-gray-300 p-2 rounded">
            @error('merek')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Stok -->
        <div class="mb-4">
            <label for="stock" class="block font-semibold">Stok</label>
            <input type="number" name="stock" value="{{ old('stock', $barang->stok) }}" class="w-full border border-gray-300 p-2 rounded">
            @error('stock')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Rating -->
        <div class="mb-4">
            <label for="rating" class="block font-semibold">Rating</label>
            <input type="number" name="rating" value="{{ old('rating', $barang->rating) }}" min="0" max="5" step="0.1" class="w-full border border-gray-300 p-2 rounded">
            @error('rating')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
