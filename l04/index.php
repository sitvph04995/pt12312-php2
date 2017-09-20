<?php 
require_once 'models/User.php';
require_once 'models/Product.php';

// lay toan bo du lieu tu bang user thoa man dieu kien id > 0
$products = Product::where(['price', ">", 100])
					->orderBy(['name', 'desc'])
					->orderBy(['price', 'desc'])
					->first();

$products->name = "ChungNQ xau trai hoc dot";
$products->detail = '4 quả thận';
$products->price = null;
echo "<pre>";
var_dump($products->update());die;

// echo "<pre>";
// var_dump($users);

// echo "danh sach san pham duoc tao boi user nay la: ";
// echo "<pre>";
// var_dump($users->getOwnProduct());
 ?>

 <table>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Name</th>
 			<th>Detail</th>
 			<th>Price</th>
 			<th>Owner</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		foreach ($products as $pro) {


 			?>
 			<tr>
	 			<th>
	 				<?= $pro->id?>
	 			</th>
	 			<th>
	 				<?= $pro->name?>
	 			</th>
	 			<th>
	 				<?= $pro->detail?>
	 			</th>
	 			<th>
	 				<?= $pro->price?>
	 			</th>
	 			<th>
	 				<?= $pro->owner()->name?>
	 			</th>
	 		</tr>
 			<?php
 		}

 		 ?>
 		
 	</tbody>
 </table>
