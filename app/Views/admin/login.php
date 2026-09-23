<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Kerak Telor Rahman</title>
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
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-md border-t-4 border-primary">
        <h2 class="text-3xl font-bold text-center text-primary mb-6">Login Admin</h2>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <form action="/admin/login" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="text" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-primary hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full transition shadow" type="submit">
                    Sign In
                </button>
            </div>
        </form>
    </div>
</body>
</html>
