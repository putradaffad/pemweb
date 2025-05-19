@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Pelanggan</h1>

    <form action="{{ route('customers.update', $customer) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        @include('customers._form')

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
            Perbarui
        </button>
    </form>

    <a href="{{ route('customers.index') }}" class="inline-block mt-4 text-blue-600">← Kembali</a>
</div>
@endsection
