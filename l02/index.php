<?php 
require_once 'models/User.php';
require_once 'models/Product.php';

$user = User::where(['name', 'like', '%a%'])
				->andWhere(['id', '>', 3])
				->get();
echo "<pre>";
var_dump($user);
 ?>