
<div id="introLoader" class="introLoading"></div>

		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero overlay-3" style="background-image:url('<?php echo base_url(); ?>assets/images/hero-header/01.jpg');">
			
				<div class="container">

					<div class="main-search-wrapper">
				
						<h2 class="text-center">What course will you like to learn?</h2>
						<p class="lead text-center">Occasional entreaties comparison me difficulty so themselves.</p>

						<div class="input-group">
							<input type="text" class="form-control placeholder-type-writter">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
						</div><!-- /input-group -->
					
						<div class="featured-sm-wrapper">
							
							<div class="GridLex-gap-30">
				
								<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">
								
									<div class="GridLex-col-4_sm-4_xs-8_xss-12">
									
										<div class="featured-sm-item clearfix">
											
											<div class="icon">
												<i class="ion-clipboard"></i>
											</div>
											
											<div class="content">
												More than 35,000 courses
											</div>
											
										</div>
										
									</div>
									
									<div class="GridLex-col-4_sm-4_xs-8_xss-12">
									
										<div class="featured-sm-item clearfix">
										
											<div class="icon">
												<i class="ion-person-stalker"></i>
											</div>
											
											<div class="content">
												Over 9 million students
											</div>
											
										</div>
										
									</div>
									
									<div class="GridLex-col-4_sm-4_xs-8_xss-12">
									
										<div class="featured-sm-item clearfix">
										
											<div class="icon">
												<i class="ion-ipad"></i>
											</div>
											
											<div class="content">
												Learn anywhere, anythime you like
											</div>
											
										</div>
										
									</div>
									
								</div>
								
							</div>

						</div>
						
					</div>
				
				</div>
				
			</div>
			<!-- end hero-header -->

			<!-- start Introduction -->
			<section class="section">
			
				<div class="container">

					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">Browse by Category</h2>
							</div>
						</div>
					
					</div>

					<div class="category-item-wrapper icon-block item-border">

						<div class="GridLex-gap-20">

							<div class="GridLex-grid-noGutter-equalHeight">

								<?php foreach ($categories as $category) { ?>

								<div class="GridLex-col-2_sm-3_xs-4_xss-6">

									<a href="#" class="category-item">
										<div class="icon">
											<i class="<?php echo 'icon-'.$category['icon']; ?>"></i>
										</div>
										<div class="content">
											<h6><?php echo $category['category_name']; ?></h6>
										</div>
									</a>

								</div>

								<?php } ?>

							</div>

						</div>

					</div>

					
				</div>
			
			</section>
			<!-- end Introduction -->
	
			<!-- start Top Offer -->
			<section class="section bg-light">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">Latest Courses</h2>
								<p>However venture pursuit he am mr cordial. Forming musical am hearing studied be luckily. <strong>Ourselves for determine</strong> attending how led gentleman sincerity.</p>
							</div>
						</div>
					
					</div>
					
					<div class="course-item-wrapper gap-20">
					
						<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">
						
							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="<?php echo base_url(); ?>assets/images/course-item/01.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="<?php echo base_url(); ?>assets/images/testimonial/01.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Mark Lassoff </span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
												</div>
												<span> (7 review)</span>
											</div>
											<h3 class="text-primary">Foundations of Enterprise Development for Windows</h3>
											<p>Create Code That Screams with C++! Hours of Video Lecture, Lab Exercises and Dozens of Code Samples for You To Use! Dave Pither-Patterson</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Programming</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>
							
							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="<?php echo base_url(); ?>assets/images/course-item/02.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="<?php echo base_url(); ?>assets/images/testimonial/02.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Nicholas Mavrakis</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
												</div>
												<span> (7 review)</span>
											</div>
											<h3 class="text-primary">Food Photography: Shooting at Restaurants</h3>
											<p>She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel.</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Photography </span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

							
							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="<?php echo base_url(); ?>assets/images/course-item/07.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="<?php echo base_url(); ?>assets/images/testimonial/03.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Ange Ermolova</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Foundations of Enterprise Development for Windows</h3>
											<p>Create Code That Screams with C++! Hours of Video Lecture, Lab Exercises and Dozens of Code Samples for You To Use! Dave Pither-Patterson</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Programming</span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>
							
							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
								<div class="course-item">
									<a href="#">
										<div class="course-item-image">
											<img src="<?php echo base_url(); ?>assets/images/course-item/08.jpg" alt="Image" class="img-responsive" />
										</div>
										<div class="course-item-top clearfix">
											<div class="course-item-instructor">
												<div class="image">
													<img src="<?php echo base_url(); ?>assets/images/testimonial/02.jpg" alt="Image" class="img-circle" />
												</div>
												<span>Nicholas Mavrakis</span>
											</div>
											<div class="course-item-price bg-danger">
												$19.56
											</div>
										</div>
										<div class="course-item-content">
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
											<h3 class="text-primary">Food Photography: Shooting at Restaurants</h3>
											<p>She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel.</p>
										</div>
										<div class="course-item-bottom clearfix">
											<div><i class="fa fa-folder-open-o"></i><span class="block"> Photography </span></div>
											<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
											<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
										</div>
									</a>
								</div>
							</div>

						</div>
					
					</div>

				</div>
				
			</section>
			<!-- end Top Offer -->
			
			<!-- start Top Destinations -->
			<section class="section pb-70">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">How It Works ?</h2>
							</div>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-sm-4">
						
							<div class="icon-featured">
								
								<h4>Learn at your own availability</h4>
								<span class="icon text-primary"><i class="ion-ios-timer-outline"></i></span>
								<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>
							
							</div>
						
						</div>
						
						<div class="col-sm-4">
						
							<div class="icon-featured">
								
								<h4>Learn by watching short video</h4>
								<span class="icon text-primary"><i class="ion-ios-film-outline"></i></span>
								<p>Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.</p>
							
							</div>
						
						</div>
						
						<div class="col-sm-4">
						
							<div class="icon-featured">
								
								<h4>Learn by real-time doing and pratacing</h4>
								<span class="icon text-primary"><i class="ion-ios-compose-outline"></i></span>
								<p>Our compass see age uncivil matters weather forbade her minutes. Ready how but truth son new under.</p>
							
							</div>
						
						</div>
						
					</div>
					
				</div>
				
			</section>
			<!-- end Top Destinations -->

			<div class="overflow-hidden half-image-content">
			
				<div class="GridLex-grid-noGutter-equalHeight">
						
					<div class="GridLex-col-6_sm-12_xs-12 bg-img" style="background-image:url('<?php echo base_url(); ?>assets/images/community-bg.jpg'); background-position: top right">
					</div>
					
					<div class="GridLex-col-6_sm-12_xs-12 bg-light">
					
						<div class="inner">
					
							<div class="promo-box-02">
							
								<h3 class="mb-20 text-primary">Join a Community of 1+ Million Students</h3>
								<p class="font20 line30 font300 font-roboto-condensed font17-xs mb-20">Agreement far boy otherwise rapturous incommode favourite. Invitation excellence imprudence understood it continuing to.</p>
								<p class="mb-25">Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily. Minuter him own clothes but observe country. </p>
								
								<a href="#" class="btn btn-primary btn-facebook btn-social mt-5">Join with Facebook</a>
								<a href="#" class="btn btn-primary btn-google-plus btn-social mt-5">Join with Google Plus</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="overflow-hidden half-image-content">
			
				<div class="GridLex-grid-noGutter-equalHeight">

					<div class="GridLex-col-6_sm-12_xs-12">
					
						<div class="inner">
					
							<div class="promo-box-02">
							
								<h3 class="mb-20 text-primary">Learn from anywhere anytime</h3>
								<p class="font20 line30 font300 font-roboto-condensed font17-xs mb-20">
									On insensible possession oh particular attachment at excellence in. The books arose but miles happy she.
								</p>
								<p class="mb-20">
									Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily.
								</p>
								<div class="mt-30">
									<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
										<span class="icon">
											<i class="ion-social-apple"></i>
										</span>
										<span class="content">
											Download on the
											<span class="block">App Store</span>
										</span>
									</a>
									<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
										<span class="icon">
											<i class="ion-social-android"></i>
										</span>
										<span class="content">
											Get it on
											<span class="block">Google Play</span>
										</span>
									</a>
								</div>
							</div>
							
						</div>
						
					</div>
					
					<div class="GridLex-col-6_sm-12_xs-12 bg-img" style="background-image:url('<?php echo base_url(); ?>assets/images/app-bg.jpg');">
					</div>
					
				</div>
				
			</div>

			<!-- start Why Us -->
			<section class="section bg-light">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">Try for Free for 30 Days</h2>
								<p class="font22 line22 font300 font-roboto-condensed font19-xs">Only <strong class="text-primary">$15 per month</strong> afterwards.</p>
							</div>
							
						</div>
						
					</div>

					<div class="icon-fearured-2-wrapper bordered mt-10">
						
						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-7_sm-6_xs-12">
							
								<div class="icon-fearured-2">
									
									<h4 class="mb-15">Career Path job guarantee</h4>

									<div class="content clearfix">
										
										<div class="icon text-primary">
											<i class="icon-trophy"></i>
										</div>
										
										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>
										
									</div>
								
								</div>
								
							</div>
							
							<div class="GridLex-col-5_sm-6_xs-12">
							
								<div class="icon-fearured-2">
									
									<h4 class="mb-15">Curriculum customized to you</h4>

									<div class="content clearfix">
										
										<div class="icon text-primary">
											<i class="icon-equalizer"></i>
										</div>
										
										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>
										
									</div>
								
								</div>
								
							</div>
							
							<div class="GridLex-col-5_sm-6_xs-12">
							
								<div class="icon-fearured-2">
									
									<h4 class="mb-15">Pair with a professional recruiter</h4>

									<div class="content clearfix">
										
										<div class="icon text-primary">
											<i class="icon-people"></i>
										</div>
										
										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>
										
									</div>
								
								</div>
								
							</div>
							
							<div class="GridLex-col-7_sm-6_xs-12">
							
								<div class="icon-fearured-2">
									
									<h4 class="mb-15">Meet with your mentor 4x a week</h4>

									<div class="content clearfix">
										
										<div class="icon text-primary">
											<i class="icon-bubbles"></i>
										</div>
										
										<p>Raising say express had chiefly detract demands she. Quiet led own cause three him marianne attended.</p>
										
									</div>
								
								</div>
								
							</div>
						
						</div>
						
					</div>
					
					<div class="text-center mt-50">
						<a href="#" class="btn btn-primary">Go Premium</a>
					</div>
					
				</div>
				
			</section>
			<!-- end Why Us -->

			<!-- start Promo -->
			<div class="promo-box-bg-img" style="background-image:url('<?php echo base_url(); ?>assets/images/teacher-bg.jpg');">
				<div class="container">
					<div class="row">
					
						<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title mb-30">
								<h2 class="text-center">Becoming our course contributor</h2>
								<p>Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale.</p>
							</div>
							
							<div class="text-center mt-40">
								<a href="#" class="btn btn-primary">Learn more</a>
							</div>
							
						</div>
					
					</div>
					
					</div>
				</div>
			</div>
			<!-- end Promo -->
			
		</div>
		<!-- end Main Wrapper -->
		
