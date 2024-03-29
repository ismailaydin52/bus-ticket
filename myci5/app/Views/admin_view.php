<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödemeler</title>
</head>
<body>
    <h1>Ödemeler Tablosu</h1>
    <table>
        <thead>
            <tr>
                <th>Ödeme ID</th>
                <th>Yolcu ID</th>
                <th>Card Numarası</th>
                <th>CVV</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($odemeler as $odeme): ?>
                <tr>
                    <td><?php echo $odeme['Ödeme_id']; ?></td>
                    <td><?php echo $odeme['Yolcu_id']; ?></td>
                    <td><?php echo $odeme['Card_numarası']; ?></td>
                    <td><?php echo $odeme['Cvv']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>


