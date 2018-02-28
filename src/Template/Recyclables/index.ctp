<h1>Recyclables</h1>

<table>
	<tr>
		<td>Name</td>
		<td>Created</td>
	</tr>
	<?php foreach ($recyclables as $recyclable) : ?>
	<tr>
		<td><?php echo $recyclable->name; ?></td>
		<td><?php echo $recyclable->created; ?></td>
	</tr>
	<?php endforeach; ?>
</table>