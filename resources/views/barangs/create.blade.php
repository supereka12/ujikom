<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Tambah Barang</h2>

        @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Tambah Barang</h2>

                <!-- Input untuk Gambar -->
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Gambar</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                </div>

                <!-- Nama Barang -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}"
                        class="w-full p-2 border border-gray-300 rounded" required>
                </div>

                <!-- Merek -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="merek">Merek</label>
                    <input type="text" name="merek" id="merek" value="{{ old('merek') }}"
                        class="w-full p-2 border border-gray-300 rounded" required>
                </div>

                <!-- Stock -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="stock">Stock</label>
                    <input type="number" name="stock" id="stock" value="{{ old('stock') }}"
                        class="w-full p-2 border border-gray-300 rounded" min="1" required>
                </div>

                <!-- Rating -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="rating">Rating</label>
                    <input type="number" name="rating" id="rating" value="{{ old('rating') }}"
                        class="w-full p-2 border border-gray-300 rounded" min="0" max="5" step="0.1"
                        required>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                    Tambah Barang
                </button>
            </div>
        </form>
    </div>
</body>

</html>
