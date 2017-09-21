<?php 
require_once 'models/User.php';
$users = User::all();


 ?>


<form action="save-product.php" method="post">
	<div>
		<input type="text" name="name" placeholder="Product Name">
	</div>

	<div>
		<input type="text" name="detail" placeholder="Product detail">
	</div>

	<div>
		<input type="text" name="sell_price" placeholder="Product price">
	</div>

	<div>
		<select name="created_by">
			<?php 
			foreach ($users as $u) {
			?>
			<option 
				
				value="<?= $u->id?>">
					<?= $u->name?>
				</option>
			<?php	
			}
			 ?>
		</select>
	</div>
	<div>
		<a href="index.php" title="">Cancel</a>
		<button type="submit">Save</button>
	</div>
</form>