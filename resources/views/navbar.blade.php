<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peminjaman</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class=" font-family-karla flex flex-col sm:flex-row">
    <!-- Sidebar -->
    <aside class="bg-yellow-500 bg-sidebar h-full sm:h-screen w-full sm:w-64 p-4 shadow-2xl sm:block hidden flex-shrink-0">
        <nav class="text-white text-base font-semibold pt-3">
            <div class="flex items-center mb-4">
                <img src="{{ asset('logo.jpg') }}" alt="Logo Dibot" class="w-12 h-12 rounded-full">
                <span class="ml-2 text-xl">DIBOT</span>
            </div>
            <a href="/member/dashboard" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Beranda
            </a>
            <a href="/barang1" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                kategori
            </a>
            <a href="/pinjamlist" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Peminjaman
            </a>
            <p class="mt-6 mb-2 font-semibold">Opsi Lainnya</p>
            <a href="/profile" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Profile
            </a>
            <a href="/tentang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-info-circle mr-3"></i>
                Tentang
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="ml-4 text-white bg-blue-600 hover:bg-red-700 px-4 py-2 rounded-lg">Logout</button>
            </form>
        </nav>
    </aside>


    <!-- Main Content -->
    <div class="flex-1 h-screen flex flex-col overflow-y-auto">
        <header class="w-full flex items-center  py-4 px-6 bg-yellow-400 shadow-lg sm:justify-between justify-between ">
            
        </header>
        @yield('koneksi')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        function toggleSidebar() {
            document.querySelector("aside").classList.toggle("hidden");
        }

        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }

        function confirmLogout(event) {
            event.preventDefault(); // Prevent default link behavior
            const confirmation = confirm("Are you sure you want to logout?");
            if (confirmation) {
                window.location.href = "/"; // Redirect to login page
            }
        }

    </script>

</body>

</html>
