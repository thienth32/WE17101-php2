<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "FPT Polytechnic")</title>
</head>
<body>
    <div style="height: 70px; background: brown;">
        phần header của website
    </div>
    <div style="width: 150px; height: 500px; background: green; display: inline-block;">
        phần menu của trang
    </div>
    <div style="width: 700px; height: 500px; backround: gray; display: inline-block;">
        @yield('content')
    </div>
    <div style="height: 50px; background: yellow;">
        phần chân trang
    </div>
    
</body>
</html>