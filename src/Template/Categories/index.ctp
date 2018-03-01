<h1>Categories</h1>

<table>
	<tr>
		<td>Name</td>
		<td>Created</td>
	</tr>
	<?php foreach ($categories as $category) : ?>
	<tr>
		<td><?php echo $category->name; ?></td>
		<td><?php echo $category->created; ?></td>
		<td><?php echo $this->Html->link('View', ['action' => 'view', $category->id]); ?></td>
	</tr>
	<?php endforeach; ?>
</table>