@extends('navbar')

@section('koneksi')
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="bg-gray-100 p-6 rounded-lg shadow-sm">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-center -mx-4">
                        <!-- Elektronik Card 1 -->
                        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
                            <a href="/elektronik" class="block bg-white shadow-lg hover:shadow-2xl rounded-lg overflow-hidden transition-transform transform hover:scale-105">
                                <div class="relative pb-48 overflow-hidden">
                                    <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 hover:scale-110" src="{{ asset('laptop1.jpg') }}" alt="Elektronik">
                                </div>
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-center text-gray-700">Elektronik</h2>
                                </div>
                            </a>
                        </div>

                        <!-- Elektronik Card 2 -->
                        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
                            <a href="/elektronik" class="block bg-white shadow-lg hover:shadow-2xl rounded-lg overflow-hidden transition-transform transform hover:scale-105">
                                <div class="relative pb-48 overflow-hidden">
                                    <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 hover:scale-110" src="{{ asset('book1.jpg') }}" alt="Elektronik">
                                </div>
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-center text-gray-700">Buku</h2>
                                </div>
                            </a>
                        </div>

                        <!-- Elektronik Card 3 -->
                        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
                            <a href="/elektronik" class="block bg-white shadow-lg hover:shadow-2xl rounded-lg overflow-hidden transition-transform transform hover:scale-105">
                                <div class="relative pb-48 overflow-hidden">
                                    <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 hover:scale-110" src="{{ asset('speaker1.png') }}" alt="Elektronik">
                                </div>
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-center text-gray-700">Speaker</h2>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <x-footer></x-footer>
@endsection
