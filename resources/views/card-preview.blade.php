<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Kartu Nama</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-2xl p-5 w-full max-w-2xl min-h-[600px] text-center">
        <h2 class="text-2xl font-bold text-gray-700 mb-8">Kartu Berhasil Dibuat ✅</h2>

        {{-- Preview Kartu --}}
        @isset($fileName)
            <div class="mb-6">
                <img src="{{ asset('storage/cards/' . $fileName) }}" 
                     alt="Kartu Preview"
                     class="rounded-xl shadow-lg border mx-auto max-h-80">
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex justify-center gap-4">
                <a href="{{ url()->previous() }}"
                   class="px-4 py-2 rounded-xl bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold transition">
                    ⬅️ Buat Lagi
                </a>

                <a href="{{ route('card.download', $fileName) }}"
                   class="px-4 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold transition">
                    ⬇️ Download
                </a>
            </div>
        @else
            <p class="text-red-500 font-semibold">File belum tersedia.</p>
        @endisset

    </div>

</body>
</html>