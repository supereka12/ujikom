<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peminjaman</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class=" font-family-karla flex flex-col sm:flex-row ">

    <!-- Sidebar -->
    <aside class="bg-sidebar bg-green-500 h-full sm:h-screen w-full sm:w-64 p-4 shadow-xl sm:block hidden flex-shrink-0">
        <nav class="text-white text-base font-semibold pt-3">
            <div class="flex items-center mb-4">
                <img src="{{ asset('logo.jpg') }}" alt="Logo Dibot" class="w-12 h-12 rounded-full">
                <span class="ml-2 text-xl">DIBOT</span>
            </div>
            <a href="/admin/dashboard1" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                beranda
            </a>
            <a href="/listbarang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                List barang
            </a>
            <a href="/listpinjam"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                List peminjaman
            </a>
            <p class="mt-6 mb-2 font-semibold">Opsi Lainnya</p>
            <a href="/profile1" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Profile
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="ml-4 text-white bg-blue-600 hover:bg-red-700 px-4 py-2 rounded-lg">Logout</button>
            </form>
        </nav>
    </aside>




    <!-- Main Content -->
    <div class="flex-1 h-screen flex flex-col overflow-y-auto">
        <header class="w-full flex items-center  py-4 px-6 bg-green-300 shadow-lg sm:justify-between justify-between">
            <!-- Burger Icon -->
            <button class="text-white sm:hidden" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
        </header>
        @yield('konek')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        function toggleSidebar() {
            document.querySelector("aside").classList.toggle("hidden");
        }
    </script>
    <script>
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
