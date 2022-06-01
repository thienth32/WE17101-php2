<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h2>Đây là trang danh sách sản phẩm</h2>
    <ul>
        <?php foreach($products as $p): ?>
            <li>Sp: <?= $p->name ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>