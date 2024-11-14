@extends('navbar1')
@section('konek')    

<div class="h-screen bg-gray-400 dark:bg-gray-800 flex items-start justify-center pt-6 px-4 md:px-4 lg:px-6">
    <div class="container max-w-6xl bg-white shadow-lg transform duration-200 ease-in-out">
        <div class="h-48 overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ asset('blue.jpg') }}" alt="Banner Image" />
        </div>
        <div class="flex px-6 -mt-14 items-center">
            <img class="h-48 w-48 bg-white p-2 rounded-full" src="{{ asset('dd.jpg') }}" alt="Profile Image" />
            
            <div class="ml-4">
                <h4 class="text-bluePrimary text-3xl font-bold">{{ $user->name }}</h4>
                <p class="text-lightSecondary text-xl font-normal">{{ $user->email }}</p>
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>

@endsection