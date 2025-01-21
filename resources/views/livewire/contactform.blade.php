<div class="bg-blue-50 border border-gray-300 rounded-lg p-6">
    <form wire:submit="send" method="post">
        <!-- Form fields -->
        <div class="mb-4">
            <label for="nama" class="block text-sm font-semibold mb-2">Nama Lengkap:</label>
            <input wire:model="nama" type="text" id="nama" class="w-full p-3 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="NIK" class="block text-sm font-semibold mb-2">NIK:</label>
            <input wire:model="NIK" type="text" id="NIK" class="w-full p-3 border border-gray-300 rounded-md">
            @error('NIK') <span class="text-red-500 text-sm"> NIK must not be greater than 16 characters.</span>@enderror
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-sm font-semibold mb-2">Alamat:</label>
            <input wire:model="alamat" type="text" id="alamat" class="w-full p-3 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="telepon" class="block text-sm font-semibold mb-2">Nomor Telepon:</label>
            <input wire:model="telepon" type="tel" id="telepon" class="w-full p-3 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold mb-2">Email:</label>
            <input wire:model="email" type="email" id="email" class="w-full p-3 border border-gray-300 rounded-md">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>
        <!-- Button to trigger form submission -->
        <button type="submit" class="bg-blue-900 text-white py-2 px-6 rounded-md hover:bg-blue-700">Kirim Data</button>
    </form>
    @if (session()->has('success'))
    <div class="bg-green-200 text-green-800 px-4 py-2 rounded-lg">
        {{ session('success') }}
    </div>
    @endif

    @if (session()->has('error'))
    <div class="bg-red-800 text-white px-4 py-2 rounded-lg">
        {{ session('error') }}
    </div>
    @endif
</div>
