<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
  <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Paper Baru</h2>

  <form action="{{ route('research.storeR') }}" method="POST" class="space-y-6">
    @csrf
    <!-- Pilih Writter -->
    <div>
      <label for="writter_id" class="block text-sm font-medium text-gray-700 mb-1">Writter</label>
      <select id="writter_id" name="writter_id" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @foreach($writters as $writter)
            <option value="{{ $writter->id }}">{{ $writter->name }}</option>
        @endforeach
      </select>
    </div>

    <!-- Title -->
    <div>
      <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
      <input type="text" id="title" name="title"
             placeholder="Masukkan judul penelitian"
             class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <!-- Abstract -->
    <div>
      <label for="abstract" class="block text-sm font-medium text-gray-700 mb-1">Abstrak</label>
      <textarea id="abstract" name="abstract" rows="5"
                placeholder="Tuliskan abstrak penelitian"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
    </div>

    <!-- Tombol Submit -->
    <div class="flex justify-end">
      <button type="submit"
              class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Simpan
      </button>
    </div>
  </form>
</div>
</x-layout>