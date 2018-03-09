<header class="page-masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Is it Recyclable?</h1>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form method="post" action="items">
          <!--<?php echo print_r($items); echo $this->Form->create($items, ['type' => 'get']);?>-->
					  <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
								<?php echo $this->Form->input('name', array('label' => false, "class" => " form-control form-control-lg", "placeholder" => __('Candy Wrapper'), 'id' => 'search'));?>
              </div>
              <div class="col-12 col-md-3">
							  <?php echo $this->Form->submit(('Check it!'),['class'=>'btn btn-block btn-lg btn-primary']); ?>
              </div>
            </div>
					<?php echo $this->Form->end(); ?>      
			</div>
    </div>
  </div>
</header>


<div class="container page-header-container">
	 <div class="row">
				<div class="col-lg-12 text-center">
          <h2>Items</h2>
				</div>
	 </div>
 </div> 
 <section class="testimonials text-center bg-light">
  <div class="container">
    <div class="row">
      <?php foreach ($items as $item) : ?>
				<div class="col-lg-3">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <?php echo $this->Html->image("ocean-1.jpg", [
						    "alt" => "Recycle",
						    "class" => "img-fluid rounded-circle mb-3",
						    'url' => ['controller' => 'Items', 'action' => 'view', $item->id]
						]); ?>
					<h5><?php echo $item->name; ?></h5>
					<?php echo $this->Html->link('Edit', ['action' => 'edit', $item->id], ['class' => 'btn btn-sm btn-primary']); ?>
        </div>
				</div>
			<?php endforeach; ?>
    </div>

    </div>
  </div>
</section> 

<div class="container">
	<div class="row">
		<div class="col-12" style="padding: 40px 0;">
			<h5>Admin Area</h5>
			<?php echo $this->Html->link('Add new Item', ['action' => 'add'], ['class' => 'btn btn-primary']); ?>
		</div>	
	</div>
</div>	




