<table class="table table-stripped">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>DETAIL</th>
			<th>OWNER</th>
			<th>
				<a href="<?php echo getUrl('add-product') ?>" title="">Add new</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($pros as $key => $value): ?>
			<tr>
				<td><?php echo $value->id ?></td>
				<td><?php echo $value->name ?></td>
				<td><?php echo $value->price ?></td>
				<td><?php echo $value->detail ?></td>
				<td><?php echo $value->owner()->name ?></td>
				<td>
					<a class="btn btn-info" href='<?php echo getUrl("update-product?id=$value->id") ?>' >Update</a>
					<a class="btn btn-danger" href='<?php echo getUrl("remove-product?id=$value->id") ?>' >Remove</a>

					<a href="<?php echo getUrl("add-to-cart?id=$value->id") ?>" class="btn btn-warning">Add to Cart</a>
				</td>
			</tr>
		<?php endforeach ?>
		
	</tbody>
</table>