<?php 
require_once 'models/User.php';
require_once 'models/Product.php';

// lay toan bo du lieu tu bang user thoa man dieu kien id > 0
$products = Product::all();

 ?>

 <table>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Name</th>
 			<th>Detail</th>
 			<th>Price</th>
 			<th>Owner</th>
 			<th>
 				<a href="add-product.php" title="">Add</a>
 			</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		foreach ($products as $pro) {


 			?>
 			<tr>
	 			<td>
	 				<?= $pro->id?>
	 			</td>
	 			<td>
	 				<?= $pro->name?>
	 			</td>
	 			<td>
	 				<?= $pro->detail?>
	 			</td>
	 			<td>
	 				<?= $pro->sell_price?>
	 			</td>
	 			<td>
	 				<?= $pro->owner()->name?>
	 			</td>
	 			<td>
	 				<a href="update-product.php?id=<?= $pro->id?>" title="">Update</a>
	 				<a href="remove-product.php?id=<?= $pro->id?>" title="">Remove</a>
	 			</td>
	 		</tr>
 			<?php
 		}

 		 ?>
 		
 	</tbody>
 </table>
