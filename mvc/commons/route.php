<?php
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});
// phân biệt request method ->get(), ->post(), ->put(), ->any(),..
$router->get('danh-sach-tk', [App\Controllers\HomeController::class, 'listUser']);

$router->get('tao-tk', [App\Controllers\HomeController::class, 'userAddForm']);
$router->post('tao-tk', [App\Controllers\HomeController::class, 'addNewUser']);

// có thể có tham số đường dẫn - thể hiện bằng {tên tham số}
$router->get('sua-tk/{id}', [App\Controllers\HomeController::class, 'userEditForm']);
$router->post('sua-tk/{id}', [App\Controllers\HomeController::class, 'saveEditUser']);

$router->get('xoa-tk/{id}', [App\Controllers\HomeController::class, 'removeUser']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>