<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="bg-primary text-white text-center py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="container mx-auto relative z-10 px-4">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4 text-secondary drop-shadow-md">KERAK TELOR RAHMAN</h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto font-light">Cita rasa otentik Betawi dengan sentuhan modern. Rasakan gurihnya tradisi di setiap gigitan.</p>
        <a href="#menu" class="mt-8 inline-block bg-secondary text-primary font-bold py-3 px-8 rounded-full hover:bg-white hover:shadow-lg transition transform hover:-translate-y-1">Lihat Menu</a>
    </div>
</div>

<div id="menu" class="container mx-auto py-16 px-4">
    <h2 class="text-4xl font-bold text-center text-primary mb-12 relative pb-4">
        Menu Andalan Kami
        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-secondary rounded"></span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php foreach ($menus as $m): ?>
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 flex flex-col h-full border border-gray-100">
            <div class="h-48 bg-gray-200 relative">
                <?php if ($m['image'] && file_exists('uploads/'.$m['image'])): ?>
                    <img src="/uploads/<?= $m['image'] ?>" class="w-full h-full object-cover">
                <?php else: ?>
                    <img src="/uploads/kerak_telor.jpg" class="w-full h-full object-cover" alt="Kerak Telor Image">
                <?php endif; ?>
                <div class="absolute top-0 right-0 bg-secondary text-primary font-bold px-3 py-1 m-2 rounded-lg shadow">
                    Rp <?= number_format($m['price'], 0, ',', '.') ?>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-xl font-bold text-primary mb-2"><?= esc($m['name']) ?></h3>
                <p class="text-gray-600 text-sm flex-grow"><?= esc($m['description']) ?></p>
                <a href="/detail/<?= $m['id'] ?>" class="mt-4 block text-center w-full bg-primary text-white py-2 rounded-lg hover:bg-red-800 transition shadow">Lihat Detail & Pesan</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
