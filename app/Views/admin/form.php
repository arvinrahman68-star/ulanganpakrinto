<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mx-auto py-10 px-4 max-w-2xl">
    <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-secondary">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-primary"><?= $action ?> Menu Makanan</h2>
            <a href="/admin/dashboard" class="text-gray-500 hover:text-primary">Kembali</a>
        </div>

        <form action="/admin/<?= $action == 'Create' ? 'store' : 'update/'.$menu['id'] ?>" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Menu</label>
                <input type="text" name="name" value="<?= $menu ? esc($menu['name']) : '' ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Harga (Rp)</label>
                <input type="number" name="price" value="<?= $menu ? esc($menu['price']) : '' ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent"><?= $menu ? esc($menu['description']) : '' ?></textarea>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama File Gambar (Opsional)</label>
                <input type="text" name="image" value="<?= $menu ? esc($menu['image']) : '' ?>" placeholder="contoh: kerak_telor_spesial.jpg" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                <p class="text-xs text-gray-500 mt-1">File gambar harus berada di folder public/uploads/</p>
            </div>

            <button type="submit" class="w-full bg-primary hover:bg-red-800 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline transition shadow">
                Simpan Data
            </button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
