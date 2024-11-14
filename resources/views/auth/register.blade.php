<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-50 flex items-center justify-center h-screen" style="background-image: url({{ asset('blue.jpg') }});background-size: cover ;
background-position: center;">
    <div class="flex w-full h-full md:h-auto md:max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="hidden md:block w-1/2 object-cover">
            <img src="jjj.jpg" alt="Desk Setup" class="w-full h-full ">
        </div>

        <div class="w-full md:w-1/2 p-8 space-y-4 flex flex-col justify-center">
            <h2 class="text-2xl font-semibold text-gray-800">Create an account</h2>
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @if (session('success'))
                    <div class="alert alert-success text-green-600 mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger text-red-600 mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div>
                    <label for="name" class="text-gray-600">Name</label>
                    <input id="name" type="text" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div>
                    <label for="email" class="text-gray-600">Email address</label>
                    <input id="email" type="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div>
                    <label for="password" class="text-gray-600">Password</label>
                    <input id="password" type="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md focus:outline-none">Register</button>
            </form>
            <div class="text-center mt-4">
                <p>Already have an account? <a href="/" class="text-blue-500 hover:underline">Login here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
