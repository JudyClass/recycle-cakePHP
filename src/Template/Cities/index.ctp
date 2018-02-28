<h1>Cities</h1>

<table>
	<tr>
		<td>Name</td>
		<td>Created</td>
	</tr>
	<?php foreach ($cities as $city) : ?>
	<tr>
		<td><?php echo $city->name; ?></td>
		<td><?php echo $city->created; ?></td>
	</tr>
	<?php endforeach; ?>
</table>