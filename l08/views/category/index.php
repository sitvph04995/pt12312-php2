<table class="table table-stripped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Parent Name</th>
			<th>
				<a href="<?php echo getUrl() ?>" title="">Add</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($cates as $value): ?>
			<tr>
				<td><?php echo $value->id ?></td>
				<td><?php echo $value->name ?></td>
				<td><?php echo $value->getParentName() ?></td>
			</tr>
		<?php endforeach ?>
		
	</tbody>
</table>