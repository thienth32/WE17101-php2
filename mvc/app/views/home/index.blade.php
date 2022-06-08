<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h2>Xin chào, {{$x}}</h2>
    <p>Giới tính: @if($gender == 1) Nam @else Nữ @endif</p>
    <p>Đây là nội dung trang chủ</p>
</body>
</html>