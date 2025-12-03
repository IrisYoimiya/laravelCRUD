<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div>
        
        <h1 class="text-3xl font-bold text-center text-gray-800">Tambah Data Baru</h1>
        <p class="text-center text-gray-500">Silakan isi informasi di bawah ini.</p>

        <form action="{{ route('writter.storeW') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap"
                       class="w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Contoh: Budi Santoso" required>
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Alamat Email</label>
                <input type="email" id="email" name="email"
                       class="w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                       placeholder="contoh@email.com" required>
            </div>

            <div>
                <button type="submit"
                        class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition duration-200">
                    Simpan Data
                </button>
            </div>

        </form>
    </div>

</x-layout>