<!-- In resources/views/about.blade.php -->
@extends('navbar')
@section('koneksi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-4">About Us</h1>
        <p class="text-lg leading-relaxed">
            Welcome to our website! We are dedicated to providing the best service and quality products to our customers.
            Our mission is to make sure every interaction you have with us is a positive experience.
        </p>

        <h2 class="text-2xl font-semibold mt-6 mb-2">Our Mission</h2>
        <p>
            Our mission is to provide top-notch solutions tailored to meet the needs of our diverse customer base.
        </p>

        <h2 class="text-2xl font-semibold mt-6 mb-2">Our Team</h2>
        <p>
            We are a team of passionate individuals working together to make a difference in the world.
        </p>
    </div>
</body>
</html>

@endsection
