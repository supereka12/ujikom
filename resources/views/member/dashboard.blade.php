@extends('navbar')

@section('koneksi')

<div class="container mx-auto p-6 flex items-center bg-white shadow-lg rounded-lg">
    <!-- Bagian Gambar -->
    <div class="w-1/2">
        <img src="{{ asset('dd.jpg') }}" alt="Foto Besar" class="w-full h-auto rounded-lg">
    </div>
    
    <!-- Bagian Teks -->
    <div class="w-1/2 p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang</h1>
        <p class="text-lg text-gray-600">
            Selamat datang di peminjaman barang. Anda dapat mengelola barang yang ada dan melakukan peminjaman.
        </p>
    </div>
</div>

<x-footer></x-footer>
@endsection
