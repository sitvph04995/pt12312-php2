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
				<th>EMAIL</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $key => $value): ?>
				<tr>
					<td>
						<?php echo $value->id ?>
					</td>
					<td>
						<?php echo $value->name ?>
					</td>
					<td>
						<?php echo $value->email ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>