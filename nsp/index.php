<?php 

/**
* 
*/
require_once 'MongoModel/Product.php';
require_once 'MysqlModel/Product.php';
use MongoModel\Product;
use MysqlModel\Product as MyProduct;
$a = new MyProduct();

echo $a->getName();



 ?>