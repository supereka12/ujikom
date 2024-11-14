@extends('navbar')

@section('koneksi')
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full p-4 text-center mt-3 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="container mx-auto">
                    <div class="flex flex-wrap -mx-4">

                        {{-- Menampilkan Barang yang Tersedia --}}
                        @foreach ($barangs as $item)
                            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                                <div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-300 ease-in-out">
                                    <div class="relative overflow-hidden flex items-center justify-center bg-gray-200" style="height: 200px;">
                                        @if ($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="Image of Barang" class="object-cover h-full w-full transition-transform duration-300 ease-in-out transform hover:scale-110">
                                        @else
                                            <p class="text-gray-500">No image available</p>
                                        @endif
                                    </div>
                                    <div class="p-4">
                                        <div class="mb-2">
                                            <h2 class="text-left text-gray-800 font-semibold text-lg"> {{ $item->nama_barang }}</h2>
                                            <p class="text-left text-gray-600"><strong>Merek:</strong> {{ $item->merek }}</p>
                                            <p class="text-left text-gray-600"><strong>Stock:</strong> {{ $item->stock }}</p>
                                        </div>

                                        <!-- Tampilkan tombol jika stok tersedia -->
                                        @if ($item->stock > 0)
                                            <a href="{{ route('peminjaman.create', $item->id) }}" class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-red-600 transition-all duration-200">Pinjam</a>
                                        @else
                                            <span class="mt-4 w-full bg-gray-400 text-white py-2 rounded-lg block text-center">Stok Habis</span>
                                        @endif
                                    </div>
                                </div>
                            </div>  
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
    <x-footer></x-footer>
@endsection
