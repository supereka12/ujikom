<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-50 flex items-center justify-center h-screen" style="background-image: url({{ asset('blue.jpg') }});background-size: cover;
background-position: center;">
    <div class="flex w-full h-full md:h-auto md:max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
        
        <div class="w-full md:w-1/2 p-8 space-y-4 flex flex-col justify-center">
            <h2 class="text-2xl font-semibold text-gray-800">Sign in to your account</h2>

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

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="text-gray-600">Email address</label>
                    <input id="email" type="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div>
                    <label for="password" class="text-gray-600">Password</label>
                    <input id="password" type="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="form-checkbox text-blue-500">
                        <span class="ml-2 text-gray-600">Remember me</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md focus:outline-none">Sign in</button>
            </form>

            <div class="text-center mt-4">
                <p>Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register here</a></p>
            </div>
        </div>

        <div class="hidden md:block w-1/2 h-full">
            <img src="jjj.jpg" alt="Desk Setup" class="w-full h-full object-cover">
        </div>

    </div>
  </body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</html>

