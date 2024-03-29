<!DOCTYPE html>
<title>
    Toplam Yolcu Sayısı
</title>
<head>
      Toplam Bilet Satış 
</head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<body>
    <canvas id="myChart" width="300" height="300"></canvas>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['İzmir-İstanbul', 'İzmir-Kocaeli', 'İstanbul-Zonguldak', 'Kocaeli-İzmir', 'İstanbul-Kocaeli', 'Kocaeli-Zonguldak', 'İstanbul-Zonguldak'],
            datasets: [{
                label: 'Aylara Göre Sefer Satışları',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
    
</body>
</html>