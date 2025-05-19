@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Detail Pelanggan</h1>

    <div class="space-y-2">
        <p><strong>Nama:</strong> {{ $customer->name }}</p>
        <p><strong>No KTP/SIM:</strong> {{ $customer->identity_number }}</p>
        <p><strong>Telepon:</strong> {{ $customer->phone }}</p>
        <p><strong>Alamat:</strong> {{ $customer->address }}</p>
        <p><strong>Email:</strong> {{ $customer->email ?? '-' }}</p>
        <p><strong>Status:</strong> {{ $customer->status }}</p>
        <p><strong>Catatan Khusus:</strong> {{ $customer->notes ?? '-' }}</p>
    </div>

    <a href="{{ route('customers.index') }}" class="inline-block mt-4 text-blue-600">← Kembali</a>
</div>
@endsection
