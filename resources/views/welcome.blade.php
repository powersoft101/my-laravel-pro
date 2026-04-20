<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-900 text-white">

    <!-- Wrapper -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 p-5 hidden md:block">
            <h2 class="text-2xl font-bold mb-6 text-blue-400">Home</h2>

            <nav class="space-y-4">
                <a href="#" class="block p-2 rounded hover:bg-gray-700">🏠 Dashboard</a>
                <a href="#" class="block p-2 rounded hover:bg-gray-700">📁 Projects</a>
                <a href="#" class="block p-2 rounded hover:bg-gray-700">👤 Profile</a>
                <a href="#" class="block p-2 rounded hover:bg-gray-700">⚙️ Settings</a>
                <a href="#" class="block p-2 rounded hover:bg-red-600">🚪 Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col flex-1">

            <!-- Header -->
            <header class="bg-gray-800 p-4 flex justify-between items-center shadow-md">
                <h1 class="text-xl font-semibold">Welcome, Yogesh 👋</h1>
                <button class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
                    Action
                </button>
            </header>

            <!-- Content -->
            <main class="flex-1 p-6 overflow-y-auto">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="bg-gray-800 p-5 rounded-xl shadow hover:scale-105 transition">
                        <h2 class="text-lg font-semibold mb-2">Card 1</h2>
                        <p class="text-gray-400">Some quick stats or info here.</p>
                    </div>

                    <div class="bg-gray-800 p-5 rounded-xl shadow hover:scale-105 transition">
                        <h2 class="text-lg font-semibold mb-2">Card 2</h2>
                        <p class="text-gray-400">More content goes here.</p>
                    </div>

                    <div class="bg-gray-800 p-5 rounded-xl shadow hover:scale-105 transition">
                        <h2 class="text-lg font-semibold mb-2">Card 3</h2>
                        <p class="text-gray-400">You can customize this.</p>
                    </div>

                </div>

            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-center p-4 text-gray-400">
                © 2026 Yogesh Jadhav | All rights reserved
            </footer>

        </div>

    </div>

</body>

</html>