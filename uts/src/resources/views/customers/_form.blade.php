<div>
    <label class="block font-medium">Nama</label>
    <input type="text" name="name" value="{{ old('name', $customer->name ?? '') }}" class="w-full border px-3 py-2 rounded" required>
</div>

<div>
    <label class="block font-medium">Nomor KTP</label>
    <input type="text" name="identity_number" value="{{ old('identity_number', $customer->identity_number ?? '') }}" class="w-full border px-3 py-2 rounded" required>
</div>

<div>
    <label class="block font-medium">Email</label>
    <input type="email" name="email" value="{{ old('email', $customer->email ?? '') }}" class="w-full border px-3 py-2 rounded" required>
</div>

<div>
    <label class="block font-medium">No Telepon</label>
    <input type="text" name="phone" value="{{ old('phone', $customer->phone ?? '') }}" class="w-full border px-3 py-2 rounded" required>
</div>

<div>
    <label class="block font-medium">Alamat</label>
    <textarea name="address" class="w-full border px-3 py-2 rounded" required>{{ old('address', $customer->address ?? '') }}</textarea>
</div>
