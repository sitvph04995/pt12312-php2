<?php 
require_once 'models/User.php';
require_once 'models/Product.php';

$user = User::where(['name', 'like', '%a%'])
				->andWhere(['id', '>', 3])
				// var_dump($user);die;
				->get();
echo "<pre>";
var_dump($user);
 ?>