@extends('navbar')

@section('koneksi')
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full p-4 text-center mt-3 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="container mx-auto">
                    <h2 class="text-2xl font-semibold mb-6">Daftar Peminjaman Barang</h2>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Nama Barang</th>
                                <th class="py-2">Jumlah</th>
                                <th class="py-2">Tanggal Peminjaman</th>
                                <th class="py-2">Tanggal Kembali</th>
                                <th class="py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $index => $item)
                                <tr class="text-center border-b">
                                    <td class="py-2">{{ $item->barang->nama_barang ?? 'N/A' }}</td>
                                    <td class="py-2">{{ $item->jumlah }}</td>
                                    <td class="py-2">{{ $item->tanggal_peminjaman }}</td>
                                    <td class="py-2">{{ $item->tanggal_kembali   ?? '-' }}</td>
                                    <td class="py-2">{{ ucfirst($item->status) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <x-footer></x-footer>

@endsection
