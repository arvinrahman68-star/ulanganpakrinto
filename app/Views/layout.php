<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerak Telor Rahman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#7F1D1D',
                        secondary: '#D4AF37',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <nav class="bg-primary text-white p-4 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold tracking-wider text-secondary">RAHMAN KERAK TELOR</a>
            <div>
                <a href="/" class="hover:text-secondary px-3 transition">Home</a>
                <a href="/admin/dashboard" class="hover:text-secondary px-3 transition">Admin</a>
                <?php if (session()->get('isLoggedIn')): ?>
                    <a href="/admin/logout" class="hover:text-secondary px-3 transition">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="bg-gray-900 text-gray-400 p-6 text-center mt-10">
        <p>&copy; 2026 Kerak Telor Rahman. All rights reserved.</p>
    </footer>
</body>
</html>
