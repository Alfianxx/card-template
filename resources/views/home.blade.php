<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Kartu Nama</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-start justify-center pt-16">

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Buat Kartu Nama</h2>

        <form action="{{ route('card.generate') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Nama -->
            <div>
                <label class="block text-sm font-medium text-gray-600">Nama</label>
                <input type="text" name="nama" required
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Jabatan -->
            <div>
                <label class="block text-sm font-medium text-gray-600">Jabatan</label>
                <input type="text" name="jabatan" required
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">NIP</label>
                <input type="text" name="nip" required
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- pangkat -->
            <div>
                <label class="block text-sm font-medium text-gray-600">Pangkat</label>
                <input type="text" name="pangkat" required
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Tombol -->
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-blue-700 transition">
                    Generate Kartu
                </button>
            </div>
        </form>
    </div>

</body>

</html>
