<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <ul>
        <?php foreach ($products as $p): ?>
            <li><?= $p['name']?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>