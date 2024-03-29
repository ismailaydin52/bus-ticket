<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bilet Bilgilerim</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
    }
    table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
        color: #212529;
    }
    th, td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    thead {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
    }
    th {
        text-align: left;
        background-color: #e9ecef;
    }
    tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }
</style>
</head>
<body>

<div class="container">
    <h2 style="color: #0093ff;">Bilet Bilgilerim</h2>  
    <table class="table">
        <thead>
            <tr>
                <th>Açık Bilet ID</th>
                <th>Aktif Bilet</th>
                <th>Pasif Bilet</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>İstanbul-İzmir</td>
                <td>Kocaeli-Zonguldak</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Zonguldak-İstanbul</td>
                <td>Kocaeli-İstanbul</td>
            </tr>
        </tbody>
    </table>
    <a href="http://localhost/myci5/public/"> 
    <button class="btn btn-primary">Geri Dön</button></a>
</div>

</body>
</html>
