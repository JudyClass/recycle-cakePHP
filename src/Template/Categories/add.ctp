<div class="container page-header-container">
	 <div class="row">
				<div class="col-lg-12 text-center">
          <h2>Add Category</h2>
				</div>
	 </div>
 </div> 
<div class="container">
	 <div class="row">
				<div class="col-lg-12 text-center">

				<?php
				    echo $this->Form->create($categories);
				    echo $this->Form->control('name');
				    echo $this->Form->button(__('Save Category'));
				    echo $this->Form->end();
				?>
				</div>
	 </div>
 </div> 
				