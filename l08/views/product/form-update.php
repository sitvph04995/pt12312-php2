<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		<form action="<?php echo getUrl('save-update-product') ?>" method="post" novalidate>
			<input type="hidden" name="id" value="<?php echo $model->id ?>">
			<div class="form-group">
				<label>Product Name</label>
				<input 	type="text" name="name" 
						value="<?php echo $model->name ?>" class="form-control" 
						placeholder="Product Name">
			</div>
			<div class="form-group">	
				<label>Product Price</label>
				<input 	type="number" name="price" 
						value="<?php echo $model->price ?>" class="form-control" 
						placeholder="Product Price">
			</div>
			<div class="form-group">	
				<label>Product detail</label>
				<textarea name="detail" class="form-control"><?php echo $model->detail ?>
				</textarea>
			</div>
			<div class="form-group">	
				<label>Owner</label>
				<select name="created_by" class="form-control">
					<?php foreach ($users as $u): ?>
						<option 
							<?php if ($u->id == $model->created_by): ?>
								selected 
							<?php endif ?>
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
