<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		<form action="<?php echo getUrl('post-save-product') ?>" method="post" novalidate>
			<div class="form-group">
				<label>Product Name</label>
				<input 	type="text" name="name" 
						value="" class="form-control" 
						placeholder="Product Name">
			</div>
			<div class="form-group">	
				<label>Product Price</label>
				<input 	type="number" name="price" 
						value="" class="form-control" 
						placeholder="Product Price">
			</div>
			<div class="form-group">	
				<label>Product detail</label>
				<textarea name="detail" class="form-control"></textarea>
			</div>
			<div class="form-group">	
				<label>Owner</label>
				<select name="created_by" class="form-control">
					<?php foreach ($users as $u): ?>
						<option 							
							value="<?php echo $u->id ?>">
							<?php echo $u->name ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="text-center">
				<a href="<?php echo getUrl('/') ?>" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
			
		</form>
	</div>
	
</div>
