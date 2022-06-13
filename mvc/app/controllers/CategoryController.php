<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController{

    public function index(){
        $categories = Category::all();
        // $products->load('category');
        return $this->render('category.index', compact('categories'));
    }


}

?>