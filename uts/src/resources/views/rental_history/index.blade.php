@extends('layouts.app')

@section('title', 'Riwayat Rental')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-7xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">Riwayat Rental Pelanggan</h2>

    @if($histories->isEmpty())
        <p class="text-gray-600">Belum ada data riwayat rental.</p>
    @else
        <table class="w-full table-auto border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Nama Pelanggan</th>
                    <th class="border px-4 py-2">Kendaraan</th>
                    <th class="border px-4 py-2">Tanggal Sewa</th>
                    <th class="border px-4 py-2">Durasi Hari (hari)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histories as $history)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $history->customer->name }}</td>
                        <td class="border px-4 py-2">{{ $history->vehicle }}</td>
                        <td class="border px-4 py-2">{{ $history->rental_date->format('d-m-Y') }}</td>
                        <td class="border px-4 py-2">{{ $history->duration_days }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('customers.index') }}" class="inline-block mt-4 text-blue-600 hover:underline">
        ← Kembali ke Pelanggan
    </a>
</div>
@endsection
