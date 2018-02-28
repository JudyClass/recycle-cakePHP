<h1>Items</h1>

<table>
	<tr>
		<td>Name</td>
		<td>Created</td>
	</tr>
	<?php foreach ($items as $item) : ?>
	<tr>
		<td><?php echo $item->name; ?></td>
		<td><?php echo $item->created; ?></td>
	</tr>
	<?php endforeach; ?>
</table>