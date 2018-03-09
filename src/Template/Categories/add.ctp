<div class="container page-header-container">
	 <div class="row">
				<div class="col-lg-12 text-center">
          <h2>Add Category</h2>
				</div>
	 </div>
 </div> 
<div class="container">
	 <div class="row">
				<div class="col-lg-12" style="padding: 0 0 40px 0;">

				<?php
				    echo $this->Form->create($categories);
				    echo $this->Form->control('name', ['class' => 'form-control mb-3']);
				    echo $this->Form->button(__('Save Category'),['class'=>'btn btn-lg btn-primary']);
				    echo $this->Form->end();
				?>
			
		</div>
	 </div>
 </div> 								