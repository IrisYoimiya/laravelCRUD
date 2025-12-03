<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between mb-4">
          <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Penelitian</h1>
          <a href="{{ route('research.create') }}" 
             class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md shadow transition-colors duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
              Tambahkan Penelitian
          </a>
      </div>
      <div>
         <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
        <div class="mx-auto max-md: px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-4 py-3">Judul Penelitian</th>
            <th scope="col" class="px-4 py-3">Penulis</th>
            <th scope="col" class="px-4 py-3">Abstrak</th>
            <th scope="col" class="px-4 py-3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pappers as $papper)
            <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3 font-medium text-gray-900 dark:text-white max-w-[20rem] whitespace-normal break-words">
                    {{ $papper->title }}
                </td>
                <td class="px-4 py-3 max-w-[15rem] whitespace-normal break-words">
                    {{ $papper->writter->name }}
                </td>
                <td class="px-4 py-3 max-w-[25rem] whitespace-normal break-words">
                    {{ $papper->abstract }}
                </td>
                <td class="px-4 py-3 flex items-center space-x-2">
                    {{-- Tombol Edit --}}
                    <a href="#"
                        class="inline-flex items-center px-3 py-1 bg-yellow-400 hover:bg-yellow-500 text-white text-sm font-medium rounded-md transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L14.732 3.732z" />
                        </svg>
                        Edit
                    </a>
                    {{-- Tombol Hapus --}}
                    <form action="{{ route('research.delete', $papper->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-3 py-1 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

                </div>
            </div>
        </div>
      </section>
      </div>
  </div>
</x-layout>