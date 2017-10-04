<table class="table table-stripped">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>
				QUANTITY
			</th>
			<th>
				TOTAL
			</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$totalCartPrice = 0;
		 ?>
		<?php foreach ($cart as $value): ?>
			<tr>
				<td><?php echo $value['id'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['price'] ?></td>
				<td><?php echo $value['quantity'] ?></td>
				<td>
					<?php echo $value['quantity']*$value['price'] ?>
				</td>
				<?php 
					$totalCartPrice += $value['quantity']*$value['price'];
				 ?>
			</tr>
		<?php endforeach ?>
		<tr>
			<td colspan="4">Total price</td>
			<td><?php echo $totalCartPrice ?></td>
		</tr>
		
	</tbody>
</table>