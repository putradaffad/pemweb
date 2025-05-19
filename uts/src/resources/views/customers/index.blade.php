@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Daftar Pelanggan</h1>
        <a href="{{ route('customers.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            + Tambah Pelanggan
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-200 table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-3 py-2 border">#</th>
                <th class="px-3 py-2 border text-left">Nama</th>
                <th class="px-3 py-2 border text-left">No KTP</th>
                <th class="px-3 py-2 border text-left">Kontak</th>
                <th class="px-3 py-2 border text-left">Status</th>
                <th class="px-3 py-2 border text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td class="px-3 py-2 border">{{ $loop->iteration }}</td>
                    <td class="px-3 py-2 border">{{ $customer->name }}</td>
                    <td class="px-3 py-2 border">{{ $customer->identity_number }}</td>
                    <td class="px-3 py-2 border">{{ $customer->phone }}</td>
                    <td class="px-3 py-2 border">
                        <span class="px-2 py-1 rounded text-white {{ $customer->status == 'Aktif' ? 'bg-green-500' : 'bg-red-500' }}">
                            {{ $customer->status }}
                        </span>
                    </td>
                    <td class="px-3 py-2 border space-x-2">
                        <a href="{{ route('customers.show', $customer) }}" class="text-blue-600 hover:underline">Lihat</a>
                        <a href="{{ route('customers.edit', $customer) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center px-3 py-4 text-gray-500">Belum ada data pelanggan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
