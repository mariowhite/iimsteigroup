

		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<h1 class="page-title">Instructor Single</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Page</a></li>
								<li class="active">Instructor Single</li>
							</ol>
						</div>
						

						
					</div>
					
				</div>

			</div>
		
			<div class="equal-content-sidebar-wrapper">
			
				<div class="equal-content-sidebar-by-gridLex right-sidebar">
				
					<div class="container">
					
						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-12_sm-8_xs-12_xss-12">
						
								<div class="content-wrapper pb-30">

									<div class="user-profile-wrapper">
									
										<div class="user-profile-header clearfix">
									
											<div class="image">
												<img src="<?php echo base_url(); ?>assets/image/instructors/<?php echo $instructor['photo'];?>" alt="Image" />
											</div>
											
											<div class="content">
											
												<div class="rating-wrapper">
													<div class="rating-item">
														<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
													</div>
													<span> (7 review)</span>
												</div>
												<h3><a href="#"><?php echo $instructor['name']; ?></a></h3>
												<p class="labeling"><?php echo $instructor['description']; ?></p>
												
												<div class="tag-cloud alt-color mb-20 clearfix">
													<a href="#" class="tag-item">HTML5</a> <a href="#" class="tag-item">CSS3</a> <a href="#" class="tag-item">jQuery</a> 
													<a href="#" class="tag-item">Creative</a> <a href="#" class="tag-item">Design</a> 
												</div>
												
												<ul class="address-list">

													<?php
													if($instructor['address']!="")
														echo "<li><i class=\"fa fa-map-marker\"></i>".$instructor['address']."</li>";

													?>


													<?php
													if($instructor['phone']!="")
														echo "<li><i class='fa fa-phone'></i>".$instructor['phone']."</li>";

													?>
													<li><i class="fa fa-envelope"></i> <?php echo $instructor['email']; ?></li>
													
												</ul>
												
												<div class="social-a-wrapper mb-20 clearfix">

													<a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
													<a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
													<a href="#" class="google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
													<a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
												
												</div>
												

												
											</div>
										
										</div>

										
										<div id="more-his-courses" class="user-profile-content">
										
											<div class="section-title text-left mb-20">
												<h3>His Populars Courses</h3>
											</div>
										
											<div class="course-item-wrapper gap-20">
					
												<div class="GridLex-grid-noGutter-equalHeight">
												


													
													<div class="GridLex-col-4_sm-4_xs-12_xss-12">
														<div class="course-item">
															<a href="#">
																<div class="course-item-image">
																	<img src="<?php echo base_url(); ?>assets/images/course-item/01.jpg" alt="Image" class="img-responsive" />
																</div>
																<div class="course-item-top clearfix">
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
													
													<div class="GridLex-col-4_sm-4_xs-12_xss-12">
														<div class="course-item">
															<a href="#">
																<div class="course-item-image">
																	<img src="<?php echo base_url(); ?>assets/images/course-item/02.jpg" alt="Image" class="img-responsive" />
																</div>
																<div class="course-item-top clearfix">
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
													
													<div class="GridLex-col-4_sm-4_xs-12_xss-12">
														<div class="course-item">
															<a href="#">
																<div class="course-item-image">
																	<img src="<?php echo base_url(); ?>assets/images/course-item/02.jpg" alt="Image" class="img-responsive" />
																</div>
																<div class="course-item-top clearfix">
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
										
									</div>
									
								</div>
							
							</div>

									
								</div>
								
							</div>
							
						</div>
						
					</div>
					

			
		</div>
		<!-- end Main Wrapper -->
