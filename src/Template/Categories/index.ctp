<div class="container page-header-container">
	 <div class="row">
				<div class="col-lg-12 text-center">
          <h2>Categories</h2>
				</div>
	 </div>
 </div> 
<div class="container">
	 <div class="row">
				<div class="col-lg-12 text-center">

				<table class="table table-bordered">
					<tr>
						<td>Name</td>
						<td>Created</td>
							<td>Actions</td>
					</tr>
					<?php foreach ($categories as $category) : ?>
					<tr>
						<td><?php echo $category->name; ?></td>
						<td><?php echo $category->created; ?></td>
						<td>
							<?php echo $this->Html->link('View', ['action' => 'view', $category->id]); ?>
						  <?php echo $this->Html->link('Edit', ['action' => 'edit', $category->id]) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				
				<span style="background: #ccc; padding: 20px; margin-top: 20px; margin-left: 20px; float: left;"><?php echo $this->Html->link('Add new Category', ['action' => 'add']); ?></span>

				</div>
	 </div>
 </div> 

