@extends('navbar')
@section('koneksi')
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="">
                <div
                    class="w-full p-4 text-center mt-3 bg-gray-500 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                                <a href=""
                                    class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                    <div class="relative pb-48 overflow-hidden">
                                        <img class="absolute inset-0 h-full w-full object-cover"
                                            src="{{ asset('book1.jpg') }}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <h2 class="mt-2 mb-2  font-bold">novel</h2>
                                    </div>
                                </a>
                            </div>

                            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                                <a href="/pinjam"
                                    class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                    <div class="relative pb-48 overflow-hidden">
                                        <img class="absolute inset-0 h-full w-full object-cover"
                                            src="{{ asset('book2.jpg') }}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <h2 class="mt-2 mb-2  font-bold">novelll</h2>
                                    </div>

                                </a>
                            </div>

                            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                                <a href=""
                                    class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                    <div class="relative pb-48 overflow-hidden">
                                        <img class="absolute inset-0 h-full w-full object-cover"
                                            src="{{ asset('book3.jpg') }}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <h2 class="mt-2 mb-2  font-bold">novelllll  </h2>
                                    </div>

                                </a>
                            </div>

                            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                                <a href=""
                                    class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                    <div class="relative pb-48 overflow-hidden">
                                        <img class="absolute inset-0 h-full w-full object-cover"
                                            src="{{ asset('book3.jpg') }}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <h2 class="mt-2 mb-2  font-bold">novel lll</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
        </main>
    </div>
@endsection
