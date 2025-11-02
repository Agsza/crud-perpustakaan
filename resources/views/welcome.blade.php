<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} | Perpustakaan Digital</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            {{-- Fallback Tailwind CSS (Menggunakan style minimal dari file yang Anda upload) --}}
            <script src="https://cdn.tailwindcss.com"></script>
        @endif

        <style>
            /* Custom Style untuk background dan efek */
            .welcome-bg {
                background-color: #f7fafc; /* Light Gray/Off-White */
                background-image: radial-gradient(#d3d3d3 1px, transparent 1px);
                background-size: 20px 20px;
            }
        </style>
    </head>
    <body class="welcome-bg font-sans antialiased text-gray-800">
        
        <header class="p-6 lg:p-8 absolute top-0 right-0 w-full z-10">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        {{-- Jika sudah login, diarahkan ke halaman buku (setelah perbaikan redirect) --}}
                        <a
                            href="{{ url('/buku') }}"
                            class="text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 py-2 px-4 rounded-lg shadow-md transition duration-150 ease-in-out"
                        >
                            Akses Koleksi
                        </a>
                    @else
                        {{-- Tombol Login dan Register --}}
                        <a
                            href="{{ route('login') }}"
                            class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 py-2 px-4 transition duration-150 ease-in-out"
                        >
                            Masuk (Login)
                        </a>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 py-2 px-4 rounded-lg shadow-md transition duration-150 ease-in-out"
                            >
                                Daftar Sekarang
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="min-h-screen flex flex-col justify-center items-center p-6 text-center">
            
            <!-- Icon/Visual Perpustakaan (Menggunakan SVG inline untuk kualitas) -->
            <svg class="w-20 h-20 text-indigo-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14h2v2h-2zm0-8h2v6h-2z" fill="#6366F1"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15s2 1 8 1 8-1 8-1M4 9s2 1 8 1 8-1 8-1M4 3s2 1 8 1 8-1 8-1"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19v-2m16 2v-2"></path>
            </svg>
            
            <h1 class="text-6xl font-extrabold text-gray-900 mb-4 tracking-tight">
                {{ config('app.name', 'Admin Perpustakaan Online') }}
            </h1>
            
           

            @guest
                <div class="flex space-x-4">
                    <a
                        href="{{ route('register') }}"
                        class="text-lg font-bold text-white bg-indigo-600 hover:bg-indigo-700 py-3 px-8 rounded-xl shadow-lg transition duration-200 transform hover:scale-105"
                    >
                        Mulai Sekarang
                    </a>
                    <a
                        href="{{ route('login') }}"
                        class="text-lg font-bold text-indigo-600 border border-indigo-600 hover:bg-indigo-50 py-3 px-8 rounded-xl transition duration-200 transform hover:scale-105"
                    >
                        Sudah Punya Akun?
                    </a>
                </div>
            @endguest
        </div>
    </body>
</html>
