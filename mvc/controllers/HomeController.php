<?php
namespace Controllers;
use Models\User;
use Models\Product;

class HomeController{

    public function index(){

        $model = new User();
        $pModel = new Product();
        var_dump($model, $pModel);
    }
}

?>