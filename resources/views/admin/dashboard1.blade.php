@extends('navbar1')

@section('konek')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <!-- Statistik Boxes -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-purple-100 p-4 rounded-lg shadow text-center">
            <h2 class="text-4xl font-bold text-purple-800">{{ $totalBarang }}+</h2>
            <p class="text-gray-500">Stock Barang</p>
        </div>
        <div class="bg-purple-100 p-4 rounded-lg shadow text-center">
            <h2 class="text-4xl font-bold text-purple-800">{{ $totalPeminjaman }}+</h2>
            <p class="text-gray-500">Peminjaman Barang</p>
        </div>
        <div class="bg-purple-100 p-4 rounded-lg shadow text-center">
            <h2 class="text-4xl font-bold text-purple-800">{{ $totalUser }}+</h2>
            <p class="text-gray-500">Pengguna</p>
        </div>
    </div>
</div>

<x-footer></x-footer>

@endsection
