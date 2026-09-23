<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mx-auto py-10 px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-primary">Kelola Menu Makanan</h2>
        <a href="/admin/create" class="bg-secondary text-primary font-bold py-2 px-4 rounded hover:bg-yellow-500 transition shadow">Tambah Menu Baru</a>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-primary text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Gambar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama Menu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $i = 1; foreach ($menus as $m): ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $i++ ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?php if($m['image']): ?>
                            <div class="w-16 h-16 bg-gray-200 rounded overflow-hidden">
                                <img src="/uploads/<?= $m['image'] ?>" class="w-full h-full object-cover">
                            </div>
                        <?php else: ?>
                            <div class="w-16 h-16 bg-gray-100 flex items-center justify-center text-xs text-gray-400 rounded">No Img</div>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900"><?= esc($m['name']) ?></div>
                        <div class="text-xs text-gray-500 truncate w-48"><?= esc($m['description']) ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">Rp <?= number_format($m['price'], 0, ',', '.') ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        <a href="/admin/edit/<?= $m['id'] ?>" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                        <a href="/admin/delete/<?= $m['id'] ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin ingin menghapus menu ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
