<?php
/**
* 
*/
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

require_once 'controllers/BaseController.php';
class HomeController extends BaseController
{
	
	function index(){
		$products = Product::all();
		
		return $this->render("views/homepage.php", ['pros' => $products], 'views/main.layout.php');
	}

	function cateList(){

		$cates = Category::all();
		return $this->render('views/category/index.php', compact('cates'), 'views/main.layout.php');
		// $this->redirect();
	}

	function updateProduct(){
		$id = $_GET['id'];
		$model = Product::findOne($id);
		$users = User::all();
		return $this->render('views/product/form-update.php', compact('users', 'model'), 'views/main.layout.php');
	}

	function addProduct(){
		$model = new Product();
		$users = User::all();
		return $this->render('views/product/form.php', compact('users', 'model'), 'views/main.layout.php');
	}

	function postSaveProduct(){
		$model = new Product();
		$model->name = $_POST['name'];
		$model->price = $_POST['price'];
		$model->detail = $_POST['detail'];
		$model->created_by = $_POST['created_by'];
		$result = $model->insert();
		if($result != false && $result->id > 0){
			return $this->redirect("/");
		}

	}

	function saveUpdateProduct(){
		$model = Product::findOne($_POST['id']);
		$model->name = $_POST['name'];
		$model->price = $_POST['price'];
		$model->detail = $_POST['detail'];
		$model->created_by = $_POST['created_by'];
		$model->update();
		return $this->redirect("/");
	}

	function removeProduct(){
		$model = Product::findOne($_GET['id']);
		$model->delete();
		return $this->redirect("/");

	}

	function addToCart(){
		$id = $_GET['id'];
		$product = Product::findOne($id);
		$item = [
			'id' => $product->id,
			'name' => $product->name,
			'price' => $product->price
		];
		// them san pham vao trong gio hang
		addItemToCart($item);
		return $this->redirect('/');
	}

	function detailCart(){
		$cart = $_SESSION['CART'];

		return $this->render("views/cart/detail.php", compact('cart'), 'views/main.layout.php');
	}


}


  ?>

