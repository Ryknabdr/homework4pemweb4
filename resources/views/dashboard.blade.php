<x-layouts.app :title="__('Dashboard')">
    <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Selamat datang di Dashboard</h1>
        <p class="text-gray-700 dark:text-gray-300">Ini adalah halaman dashboard sederhana sebagai pengganti placeholder.</p>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-4 bg-indigo-100 rounded-lg shadow">
                <h2 class="text-lg font-semibold">Jumlah Produk</h2>
                <p class="text-3xl font-bold">123</p>
            </div>
            <div class="p-4 bg-green-100 rounded-lg shadow">
                <h2 class="text-lg font-semibold">Jumlah Kategori</h2>
                <p class="text-3xl font-bold">45</p>
            </div>
            <div class="p-4 bg-yellow-100 rounded-lg shadow">
                <h2 class="text-lg font-semibold">Jumlah Pelanggan</h2>
                <p class="text-3xl font-bold">67</p>
            </div>
        </div>
    </div>
</x-layouts.app>
