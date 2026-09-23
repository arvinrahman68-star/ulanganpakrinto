<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mx-auto py-16 px-4">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row max-w-5xl mx-auto border border-gray-100">
        <div class="md:w-1/2 relative bg-gray-100 min-h-[300px]">
            <?php if ($menu['image'] && file_exists('uploads/'.$menu['image'])): ?>
                <img src="/uploads/<?= $menu['image'] ?>" class="w-full h-full object-cover absolute inset-0">
            <?php else: ?>
                <img src="/uploads/kerak_telor.jpg" class="w-full h-full object-cover absolute inset-0" alt="Kerak Telor Default">
            <?php endif; ?>
        </div>
        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <h2 class="text-4xl font-extrabold text-primary mb-4"><?= esc($menu['name']) ?></h2>
            <div class="text-3xl text-secondary font-bold mb-6">
                Rp <?= number_format($menu['price'], 0, ',', '.') ?>
            </div>
            <p class="text-gray-700 text-lg mb-8 leading-relaxed">
                <?= esc($menu['description']) ?>
            </p>
            <div class="mt-auto">
                <a href="/" class="text-primary hover:text-red-800 font-semibold mb-4 inline-block">&larr; Kembali ke Menu</a>
                <button class="w-full bg-secondary hover:bg-yellow-600 text-primary font-bold text-lg py-4 rounded-xl transition shadow-lg transform hover:-translate-y-1">
                    Beli Sekarang via WhatsApp
                </button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
