@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Tambah Pelanggan</h1>

    <form action="{{ route('customers.store') }}" method="POST" class="space-y-4">
        @csrf
        @include('customers._form')

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan
        </button>
    </form>

    <a href="{{ route('customers.index') }}" class="inline-block mt-4 text-blue-600">← Kembali</a>
</div>
@endsection
