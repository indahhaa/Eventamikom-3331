@extands('layouts.app')

<div class="lg:col-span-2 space-y-12">
            <div class="space-y-4">
                <span
                    class="px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">Music
                    Festival</span>
                <h1 class="text-4xl md:text-5xl font-black leading-tight">Jazz Night 2024: A Celebration of Rhythm &
                    Melody</h1>
                <div class="flex flex-wrap gap-6 text-slate-500 font-medium">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Saturday, 16 Nov 2024</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>The Blue Note Lounge, Metropolis</span>
                    </div>
                </div>
            </div>

            <div class="prose prose-slate max-w-none">
                <h3 class="text-2xl font-bold mb-4">Deskripsi Event</h3>
                <p class="text-lg text-slate-600 leading-relaxed">
                    Nikmati malam yang tak terlupakan dengan alunan jazz dari musisi internasional. Jazz Night 2024
                    hadir untuk membawa Anda ke dalam perjalanan melodi yang menenangkan dan ritme yang menggugah jiwa.
                </p>
                <p class="text-lg text-slate-600 leading-relaxed mt-4">
                    Tahun ini kami menghadirkan <strong>The Jazz Collective</strong>, <strong>Luna Vance</strong>, dan
                    artis favorit lainnya. Acara ini juga dilengkapi dengan food stall premium dan area networking yang
                    nyaman.
                </p>
            </div>

            <div
                class="bg-indigo-600 rounded-[2.5rem] p-8 md:p-12 text-white shadow-2xl shadow-indigo-200 relative overflow-hidden">
                <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-8">
                    <div>
                        <p class="text-indigo-200 font-bold uppercase tracking-widest text-sm mb-2">Harga Tiket</p>
                        <h2 class="text-5xl font-black">Rp 150.000 <span class="text-lg font-medium text-indigo-200">/
                                orang</span></h2>
                        <p class="mt-4 text-indigo-100 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Sisa stok: <span class="font-bold underline">42 Tiket lagi!</span>
                        </p>
                    </div>
                    <div>
                        <a href="checkout.html"
                            class="inline-block px-10 py-5 bg-white text-indigo-600 rounded-2xl font-black text-xl hover:scale-105 transition-transform shadow-xl">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
                <!-- Decoration -->
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-white opacity-10 rounded-full"></div>
                <div class="absolute -left-10 -top-10 w-32 h-32 bg-indigo-400 opacity-20 rounded-full"></div>
            </div>

            <div class="space-y-4">
                <h3 class="text-xl font-bold">Kebijakan Tiket</h3>
                <ul class="space-y-3 text-slate-500">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        E-Ticket akan dikirimkan otomatis setelah pembayaran berhasil.
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Tiket dapat discan di pintu masuk (Check-in).
                    </li>
                    <li class="flex items-start gap-2 text-rose-500">
                        <svg class="w-5 h-5 text-rose-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Tiket yang sudah dibeli tidak dapat direfund.
                    </li>
                </ul>
            </div>
        </div>

         <main class="flex-1 p-10 overflow-y-auto">
        <!-- Header -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-black">Dashboard Ringkasan</h1>
                <p class="text-slate-500 font-medium">Selamat datang kembali, Admin!</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="text-right hidden md:block">
                    <p class="font-bold">Admin Super</p>
                    <p class="text-xs text-slate-400">Penyelenggara Utama</p>
                </div>
                <div class="w-12 h-12 bg-white rounded-2xl shadow-sm border flex items-center justify-center p-1">
                    <img src="https://ui-avatars.com/api/?name=Admin+Super&background=6366f1&color=fff"
                        class="rounded-xl">
                </div>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Total Pendapatan</p>
                <h3 class="text-2xl font-black">Rp 12.450.000</h3>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                        </path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Tiket Terjual</p>
                <h3 class="text-2xl font-black">1.284</h3>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Event Aktif</p>
                <h3 class="text-2xl font-black">8 Event</h3>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Pesanan Pending</p>
                <h3 class="text-2xl font-black">12 Pesanan</h3>
            </div>
        </div>

        <!-- Latest Sales Table -->
        @yield('content')
        
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-8 border-b flex justify-between items-center">
                <h3 class="font-black text-xl">Transaksi Terakhir</h3>
                <a href="admin-transactions.html" class="text-indigo-600 font-bold hover:underline">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-4">Pembeli</th>
                            <th class="px-8 py-4">Event</th>
                            <th class="px-8 py-4">Status</th>
                            <th class="px-8 py-4">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Donni Prabowo</p>
                                <p class="text-xs text-slate-400">donni@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">Jazz Night 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase">Success</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 155.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Maya Sari</p>
                                <p class="text-xs text-slate-400">maya@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">AI & Future Workshop</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-lg text-xs font-bold uppercase">Pending</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 55.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Budi Santoso</p>
                                <p class="text-xs text-slate-400">budi@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">Hackathon 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase">Free</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>