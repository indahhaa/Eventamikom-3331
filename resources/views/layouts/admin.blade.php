<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }} - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 flex min-h-screen">
    <aside class="w-64 bg-indigo-900 text-indigo-100 flex flex-col h-screen sticky top-0">

    <!-- Logo -->
    <div class="p-6 border-b border-indigo-800">
        <div class="flex items-center gap-3">
            <div
                class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-indigo-900 font-bold text-xl">
                AH
            </div>
            <span class="text-xl font-bold text-white tracking-tight">
                AmikomEventHub
            </span>
        </div>
    </div>

    <!-- Menu -->
    <nav class="flex-1 p-4 space-y-2">
        <p class="text-[10px] font-bold uppercase tracking-widest text-indigo-400 px-3 mb-4">
            Main Menu
        </p>

        <a href="{{ route('admin.index') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold hover:bg-indigo-800 transition">
            📊 Dashboard
        </a>

        <a href="{{ route('admin.events.index') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold transition
            {{ request()->routeIs('admin.events.*') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
            🎫 Kelola Event
        </a>

        <a href="{{ route('admin.categories.index') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold transition
            {{ request()->routeIs('admin.categories.*') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
            🏷️ Kelola Kategori
        </a>

        <a href="{{ route('admin.partners.index') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold transition
            {{ request()->routeIs('admin.partners.*') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
            🤝 Kelola Partner
        </a>
    </nav>

    <div class="pt-6 border-t border-indigo-800">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit"
                 class="w-full flex items-center gap-3 px-4 py-3 text-indigo-300 hover:text-white transition font-medium text-left">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                </path>
            </svg>
            Keluar
        </button>
        </form>
    </div>

    <!-- Logout -->
    <div class="p-4 border-t border-indigo-800">
        <a href="/"
            class="flex items-center justify-center gap-2 w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-3 rounded-xl transition">
            🚪 Keluar
        </a>
    </div>

</aside>


    <main class="flex-1 p-10 overflow-y-auto">
        @yield('content')
    </main>
</body>

</html>