<?php 
  require_once 'admin/class/common.class.php';
  require_once 'admin/class/room.class.php';
  require_once 'admin/class/review.class.php';
  require_once 'layout/header.php';
  ?>

    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">

							<h2 class="welcome_content__title">About us</h2>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active">About us</li>
							</ol>

	  					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg about__bg"></div>
    </section> <!-- / .section__header -->
	   
	<!-- section about-alt -->
    <section class="section__about-alt">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12"> 		  	
    				<h2 class="section__title">Welcome to <strong>Sunset Hotel</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    			</div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="row">
		    	<div class="section_about__content">
		    	  <div class="col-md-6">
		    	  	<div class="about__pic">
		    				<img src="assets/img/about_img.jpg" class="img-responsive" alt="...">
		    			</div> <!-- / .about__pic -->
		    	  </div>
		    	  <div class="col-md-6">
			    	  <div class="about__desc">
			  				<h3 class="about_desc__title">Probably the best place to enjoy your life</h3>
								<p class="about_desc__desc">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
								<h4 class="about_desc__quote">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</h4>
			  			</div> <!-- / .about__desc -->
		    	  </div>
		    	</div> <!-- / .section_about__content -->
		    </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section__about -->

    <!-- section services alt -->
    <section class="section__services-alt">
    	<div class="container">
		    <div class="row">
					<div class="col-sm-5">
						<h2 class="section__title services__title">Our <strong>Services</strong></h2>
						<p class="services__text">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc.</p>
						<div class="services__img">
							<a href="#services__modal" data-toggle="modal">
								<img src="assets/img/about_services.jpg" class="img-responsive" alt="...">	
							</a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="row">
							<div class="col-sm-6">
								<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-model-s"></i>
									</div>
									<div class="services_item__title">
										<h3>Parking</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolor magnam quas cumque.
									</div>
								</div> <!-- .services__item -->
							</div>
							  <div class="col-sm-6">
							  	<div class="services__item">
										<div class="services_item__logo">
											<i class="icon ion-android-bicycle"></i>
										</div>
										<div class="services_item__title">
											<h3>Fitness Hall</h3>
										</div>
										<div class="services_item__desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ullam architecto.
										</div>
									</div> <!-- .services__item -->
							  </div>
						</div> <!-- .row -->
						<div class="row">
						  <div class="col-sm-6">
						  	<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-android-restaurant"></i>
									</div>
									<div class="services_item__title">
										<h3>Restaurant</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum sint ipsum culpa consequatur.
									</div>
								</div> <!-- .services__item -->
						  </div>
						  <div class="col-sm-6">
						  	<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-android-sunny"></i>
									</div>
									<div class="services_item__title">
										<h3>Spa center</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quo iure sapiente. Earum est corporis.
									</div>
								</div> <!-- .services__item -->
							</div>  
						</div> <!-- / .row -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__services-alt -->

    <!-- section testimonials -->
    <section class="section__testimonials">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title"><strong>Testimonials</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle testimonials__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam.</p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="row">
					<div class="col-xs-12">
		    		<div id="testimonials__carousel" class="owl-carousel owl-theme testimonials__body">
		    			<?php 
		    			$review = new review;
						$data = $review->selectreview(); 
						foreach ($data as  $value) { ?> 
		    			<div class="testimonials__wrapper">
		    				<div class="testimonials__item">
				    			<div class="testimonials__img">
				    				<img src="assets/img/user.png" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name"><?php echo $value->name ; ?></h3>
		              	<p class="testimonials_caption__prof"><?php echo $value->address ; ?></p>
		              	<p class="testimonials_caption__text"><?php echo $value->message ; ?></p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
		    			</div><!-- .testimonials__wrapper -->
		    			<?php } ?> 
		    	</div>
		    </div> 
	    </div> <!-- / .row -->
	</div> <!-- / .container -->
    </section> <!-- / .section__testimonials -->

    <!-- section quote -->
    <section class="section__quote">
    	<div class="container">
		    <div class="row">
					<div class="col-xs-12">
						<i class="icon ion-ios-partlysunny-outline"></i>
						<p class="section-quote__text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
						<h2 class="section-quote__author">by <span>Dinesh khanal</span></h2>
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__quote -->

		<?php 
      require_once 'layout/footer.php';
     ?>