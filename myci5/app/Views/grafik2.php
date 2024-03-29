<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Toplam Ödeme Miktarları</title> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    canvas {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
</style>
</head>
<body>
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Grafik verileri
        const data = {
            labels: ['VISA', 'Garanti', 'İş Bankası', 'Halkbankası', 'Akbank'],
            datasets: [{
                label: 'Veri',
                data: [10, 20, 30, 40, 50],
                backgroundColor: [
                    'red',
                    'blue',
                    'green',
                    'yellow',
                    'purple'
                ]
            }]
        };

        // Grafik seçenekleri
        const options = {
            responsive: false,
            maintainAspectRatio: false
        };

        // Grafik oluşturma
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        });
    </script>
</body>
</html>
