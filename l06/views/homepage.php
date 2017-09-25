<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PRICE</th>
				<th>OWNER</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $key => $value): ?>
				<tr>
					<td><?php echo $value->id ?></td>
					<td><?php echo $value->name ?></td>
					<td><?php echo $value->price ?></td>
					<td><?php echo $value->owner()->name ?></td>
				</tr>
			<?php endforeach ?>
			
		</tbody>
	</table>
</body>
</html>