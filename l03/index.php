<?php 
require_once 'models/User.php';
require_once 'models/Product.php';

// lay toan bo du lieu tu bang user thoa man dieu kien id > 0
$users = User::findOne(1);
echo "<pre>";
var_dump($users);

echo "danh sach san pham duoc tao boi user nay la: ";
echo "<pre>";
var_dump($users->getOwnProduct());
 ?>
