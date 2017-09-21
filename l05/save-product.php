<?php 
require_once 'models/Product.php';
$id = isset($_POST['id']) == true ? $_POST['id'] : null;
$name = isset($_POST['name']) == true ? $_POST['name'] : null;
$detail = isset($_POST['detail']) == true ? $_POST['detail'] : null;
$sellPrice = isset($_POST['sell_price']) == true ? $_POST['sell_price'] : null;
$createdBy = isset($_POST['created_by']) == true ? $_POST['created_by'] : null;

if($id != null){
	$model = Product::findOne($id);
}else{
	$model = new Product();
}

$model->name = $name;
$model->detail = $detail;
$model->sell_price = $sellPrice;
$model->created_by = $createdBy;


if(isset($model->id)){
	$model->update();
}else{
	$model->insert();
}


header('location: index.php');


 ?>