<header class="masthead text-white text-center">
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
					
          
            <!--<form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
	                <?php echo $this->Form->input('link', array('label' => false, "class" => " form-control form-control-lg", "placeholder" => __('Candy Wrapper'), 'id' => 'search'));?>
                </div>
                <div class="col-12 col-md-3">
	                <a href="result.php" class="btn btn-block btn-lg btn-primary">Check it!</a>
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Check it!</button>
                </div>
              </div>
            </form>-->
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-question m-auto text-primary"></i>
              </div>
              <h3><a href="why-recycle/">Why Recycle?</a></h3>
              <p class="lead mb-0">You might recycle already, but let's see why we all should be recycling more and encourage others to do it too!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
							<h3><a href="recyclables.php">View all Recyclables</a></h3>
              <p class="lead mb-0">View all recyclables for your city! And learn what you can do to help!</p>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-location-pin m-auto text-primary"></i>
              </div>
							  <h3><a href="local-facilities.php">City Recycling Facilities</a></h3>
                <p class="lead mb-0">Depending on the city you live in, some recyclables are NOT recyclable, weird right?!</p>

            </div>
          </div>
        </div>
      </div>
    </section>
