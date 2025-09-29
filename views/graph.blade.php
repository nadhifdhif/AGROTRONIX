{{-- resources/views/graph.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphics - Agrotronix</title>
    @vite('resources/css/app.css')
    <!-- Tambahin Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <h1 class="text-3xl font-bold text-center mb-10">Graphics Page</h1>

        <!-- Grafik Dummy -->
        <div class="bg-white rounded-lg shadow p-6 max-w-4xl mx-auto">
            <canvas id="myChart" height="120"></canvas>
        </div>
    </main>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Temperature (°C)',
                    data: [21, 22, 23, 25, 24, 26],
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.3
                },
                {
                    label: 'Humidity (%)',
                    data: [65, 60, 70, 75, 72, 68],
                    borderColor: 'rgb(255, 99, 132)',
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });
    </script>
</body>
</html>
