{{-- resources/views/welcome.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrotronix</title>
    @vite('resources/css/app.css')
</head>
<body class="flex h-screen bg-gray-100 font-sans">
    <!-- Sidebar -->
    <aside class="w-48 bg-gray-400 p-4">
        <h2 class="text-white font-bold text-lg mb-4">Menu</h2>
        <ul class="space-y-2 text-white">
            <li><a href="{{ url('/') }}" class="block hover:text-gray-200">Dashboard</a></li>
            <li><a href="#" class="block hover:text-gray-200">Settings</a></li>
            <li><a href="{{ url('/graph') }}" class="block hover:text-gray-200">Graphics</a></li>
            <li><a href="#" class="block hover:text-gray-200">Users</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
        <h1 class="text-3xl font-bold text-center mb-10">Welcome to Agrotronix!</h1>

        <!-- Card Container -->
        <div class="grid grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-cyan-400 rounded-lg p-6 text-center text-black font-semibold">
                Temperature <br> 21°C
            </div>
            <div class="bg-cyan-400 rounded-lg p-6 text-center text-black font-semibold">
                Air Humidity <br> 69%
            </div>
            <div class="bg-cyan-400 rounded-lg p-6 text-center text-black font-semibold">
                Carbon Emission <br> 573 PPM
            </div>
            <div class="bg-cyan-400 rounded-lg p-6 text-center text-black font-semibold">
                Soil Humidity <br> 55%
            </div>
            <div class="bg-cyan-400 rounded-lg p-6 text-center text-black font-semibold">
                Rain Status <br> No
            </div>
            <div class="bg-cyan-400 rounded-lg p-6 text-center text-black font-semibold">
                Pump Status <br> Standby
            </div>
        </div>
    </main>
</body>
</html>
