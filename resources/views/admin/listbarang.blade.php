@extends('navbar1')

@section('konek')
<div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl font-bold mb-8">Data Barang</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('barang.store') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Barang</a>
        
        <table class="min-w-full bg-gray-500 border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
`                    <th class="py-2 px-4 border-b">Nama Barang</th>
                    <th class="py-2 px-4 border-b">Merek</th>
                    <th class="py-2 px-4 border-b">Stock</th>
                    <th class="py-2 px-4 border-b">Rating</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $item->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->nama_barang }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->merek }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->stock }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->rating }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('barang.edit', $item->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</div>
<x-footer></x-footer>
@endsection
