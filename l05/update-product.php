<?php 
require_once 'models/Product.php';
$model = Product::findOne($_GET['id']);
if(!$model){
	echo "<h2>Xin loi! Ong nham!</h2> <a href='index.php' >Ve trang chu</a>";
}

 ?>

 <?php 
require_once 'models/User.php';
$users = User::all();


 ?>


<form action="save-product.php" method="post">
	<input type="hidden" name="id" value="<?= $model->id?>">
	<div>
		<input type="text" name="name" value="<?= $model->name?>" placeholder="Product Name">
	</div>

	<div>
		<input type="text" name="detail" value="<?= $model->detail?>" placeholder="Product detail">
	</div>

	<div>
		<input type="text" name="sell_price" value="<?= $model->sell_price?>" placeholder="Product price">
	</div>

	<div>
		<select name="created_by">
			<?php 
			foreach ($users as $u) {
			?>
			<option 
				<?php 
				if($u->id == $model->created_by) echo "selected";
				 ?>
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