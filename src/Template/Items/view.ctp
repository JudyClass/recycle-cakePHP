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

<section class="showcase">
      <div class="container-fluid p-0">
 
    <div class="row no-gutters">
      <div class="col-lg-6 my-auto showcase-text order-lg-2">
        <h2><?php echo $items->recyclable; ?></h2>
        <h3><?php echo $items->name; ?></h3>
        <p><?php echo $items->description; ?></p>
      </div>
      <div class="col-lg-6 text-white showcase-img order-lg-1" style="background-image: url('img/plastic-bottles.jpg');"></div>
      
    </div>
    
  </div>
</section>
 <section class="call-to-action text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h2 class="mb-4">MEDIA</h2>
        <p>Why we need to recycle <?php echo $items->name; ?></p>
        <div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HQTUWK7CM-Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


