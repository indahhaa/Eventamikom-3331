@extends('layouts.admin', ['title' => 'Kelola Partner'])

@section('content')
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Kelola Partner</h1>
            <p class="text-slate-500 font-medium">Kelola partner yang mendukung AmikomEventHub.</p>
        </div>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden mb-8">
        <div class="px-8 py-6 bg-slate-50/50 border-b">
            <form action="{{ route('admin.partners.index') }}" method="GET" class="flex gap-3 mb-4">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari partner..."
                    class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm font-medium">

                <button type="submit"
                    class="px-6 py-3 bg-slate-800 text-white rounded-2xl font-bold shadow-lg hover:bg-slate-900 transition">
                    Cari
                </button>
            </form>

            <form action="{{ route('admin.partners.store') }}" method="POST" class="flex gap-3">
                @csrf

                <input type="text" name="name" placeholder="Nama partner..."
                    class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm font-medium">

                <input type="text" name="logo_url" placeholder="URL logo partner..."
                    class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm font-medium">

                <button type="submit"
                    class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
                    + Tambah Partner
                </button>
            </form>
        </div>
    </div>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-4">ID</th>
                        <th class="px-8 py-4">Logo</th>
                        <th class="px-8 py-4">Nama Partner</th>
                        <th class="px-8 py-4">Created At</th>
                        <th class="px-8 py-4">Updated At</th>
                        <th class="px-8 py-4">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y border-t">
                    @forelse ($partners as $partner)
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">
                                {{ $partner->id }}
                            </td>

                            <td class="px-8 py-6">
                                @if ($partner->logo_url)
                                    <img src="{{ $partner->logo_url }}" class="w-16 h-16 rounded-xl object-contain bg-slate-50">
                                @else
                                    <span class="text-xs text-slate-400">Tidak ada logo</span>
                                @endif
                            </td>

                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">{{ $partner->name }}</p>
                            </td>

                            <td class="px-8 py-6 text-sm text-slate-500">
                                {{ $partner->created_at->format('d M Y, H:i') }}
                            </td>

                            <td class="px-8 py-6 text-sm text-slate-500">
                                {{ $partner->updated_at->format('d M Y, H:i') }}
                            </td>

                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST"
                                        class="flex gap-2">
                                        @csrf
                                        @method('PUT')

                                        <input type="text" name="name" value="{{ $partner->name }}"
                                            class="px-4 py-2 rounded-xl border border-slate-200 text-sm outline-none focus:ring-2 focus:ring-indigo-500">

                                        <input type="text" name="logo_url" value="{{ $partner->logo_url }}"
                                            class="px-4 py-2 rounded-xl border border-slate-200 text-sm outline-none focus:ring-2 focus:ring-indigo-500">

                                        <button type="submit"
                                            class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition font-bold text-sm">
                                            Edit
                                        </button>
                                    </form>

                                    <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST"
                                        onsubmit="return confirm('Hapus partner ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="px-4 py-2 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition font-bold text-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-8 py-10 text-center text-slate-400 font-bold">
                                Belum ada partner.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection