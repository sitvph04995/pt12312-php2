<?php
/**
* 
*/
require_once 'models/Product.php';
require_once 'models/Category.php';

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


}


  ?>

