@extends('navbar')

@section('koneksi')
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full p-4 text-center mt-3 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="container mx-auto">
                    <h2 class="text-xl font-semibold mb-4">Formulir Peminjaman Barang</h2>

                    <form action="{{ url('/peminjaman') }}" method="POST">
                        @csrf

                        <div class="relative overflow-hidden flex items-center justify-center bg-white" style="height: 200px;">
                            @if ($barang->image)
                                <img src="{{ asset('storage/' . $barang->image) }}" alt="Image of Barang" class="object-contain h-full w-full">
                            @else
                                <p class="text-gray-500">No image available</p>
                            @endif
                        </div>

                        <!-- Tampilkan nama barang dengan ukuran lebih besar -->
                        <div class="mb-4">
                            <p class="text-left text-lg font-bold">Nama Barang: {{ $barang->nama_barang }}</p>
                            <!-- Sembunyikan input barang_id -->
                            <input type="hidden" name="barang_id" value="{{ $barang->id }}">
                        </div>
                        
                        <div class="mb-4">
                            <label for="tanggal_kembali" class="block text-left text-sm">Tanggal Kembali</label>
                            <input type="date" name="tanggal_kembali" class="form-input w-full" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime('+3 days')) }}" required>
                        </div>
                        
                        <div class="mb-4 text-left">
                            <label for="stock" class="block text-gray-600 text-sm">Jumlah</label>
                            <input type="number" name="jumlah" id="stock" class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" min="1" max="3" required>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 text-white py-2 rounded-lg w-full">Pinjam Barang</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
