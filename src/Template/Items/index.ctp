<h1>Items</h1>

<table>
	<tr>
		<td>Name</td>
		<td>Created</td>
		<td>Actions</td>
	</tr>
	<?php foreach ($items as $item) : ?>
	<tr>
		<td><?php echo $item->name; ?></td>
		<td><?php echo $item->created; ?></td>
		<td>
			<?php echo $this->Html->link('View', ['action' => 'view', $item->id]); ?>
		  <?php echo $this->Html->link('Edit', ['action' => 'edit', $item->id]) ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<span style="background: #ccc; padding: 20px; margin-top: 20px; margin-left: 20px; float: left;"><?php echo $this->Html->link('Add new Item', ['action' => 'add']); ?></span>
