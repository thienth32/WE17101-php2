<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Role;

class HomeController extends BaseController{

    public function index(){
        $name = 'FPT Polytechnic';
        $gioitinh = 2;
        $this->render('home.index', [
            'x' => $name, 
            'gender' => $gioitinh
        ]);
    }

    public function listProduct(){
        $products = Product::all();
        
        include_once "./app/views/product/list.php";
    }

    public function listUser(){
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $users = User::all();
        }else{
            $users = User::where('name', 'like', "%$keyword%")->get();
        }
        
        // echo "<pre>";
        // var_dump($users);die;
        include_once './app/views/user/list.php';
    }

    public function userAddForm(){
        $roles = Role::all();
        include_once './app/views/user/add-form.php';
    }

    public function addNewUser(){
        
        $model = new User();
        $model->fill($_POST);
        $model->save();
        header("location: danh-sach-tk");die;
    }

    public function removeUser(){
        $id = $_GET['id'];
        User::destroy($id);
        header("location: danh-sach-tk");die;
    }

    public function userEditForm(){
        $id = $_GET['id'];
        $user = User::find($id);
        $roles = Role::all();
        include_once './app/views/user/edit-form.php';
    }

    public function saveEditUser(){
        $id = $_GET['id'];
        $user = User::find($id);
        $user->fill($_POST);
        $user->save();
        header("location: danh-sach-tk");die;
    }
}

?>