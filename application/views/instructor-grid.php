

		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<h1 class="page-title">Feature Items</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="#">Instructor</a></li>
								<li class="active">Instructor - Grid</li>
							</ol>
						</div>
						

						
					</div>
					
				</div>

			</div>
		
			<div class="equal-content-sidebar-wrapper">
			
				<div class="equal-content-sidebar-by-gridLex">
				
					<div class="container">
					
						<div class="GridLex-grid-noGutter-equalHeight">
				
							<div class="GridLex-col-3_sm-4_xs-12_xss-12">

								<div class="sidebar-wrapper">

									<aside class="filter-sidebar">
					
										<div class="responsive-filter-wrapper">
									
											<button type="button" class="navbar-toggle btn btn-primary collapsed btn-responsive-filter" data-toggle="collapse" data-target="#responsive-filter-box">Search Again &amp; Filter</button>
											
											<div class="clear"></div>
											
											<div class="collapse navbar-collapse responsive-filter-box" id="responsive-filter-box">
											
												<div class="collapse-inner">

													<div class="sidebar-header clearfix">
														<h4>Filter Results</h4>
														<a href="#" class="sidebar-reset-filter">reset filter</a>
													</div>
													
													<div class="sidebar-inner">
													
														<div class="row gap-20">
															
															<div class="clear"></div>

															<!-- subjects -->
															<div class="col-xss-12 col-xs-6 col-sm-12">
															
																<div class="sidebar-module clearfix">

																	<?php include ('filter_subject.php'); ?>
																
																</div>
																
															</div>

															<!-- categories -->
															<div class="col-xss-12 col-xs-6 col-sm-12">
															
																<div class="sidebar-module clearfix">

																	<?php include ('filter_categories.php'); ?>
			
																</div>
																
															</div>
															
															<div class="clear"></div>
														
															<div class="col-xss-12 col-xs-12 col-sm-12">
															
																<div class="sidebar-module">
														
																	<h6 class="sidebar-title">Filter Select</h6>
																	
																	<select class="select2-single-no-search form-control mt-20" data-placeholder="Select Placeholder">
																		<option>&nbsp;</option>
																		<option value="0"> Select One</option>
																		<option value="1"> Select Two</option>
																		<option value="2"> Select Three</option>
																		<option value="3"> Select Four</option>
																		<option value="4"> Select Five</option>
																	</select>
																	
																</div>
																
															</div>
															
															<div class="col-xss-12 col-xs-12 col-sm-12">
															
																<div class="sidebar-module">
														
																	<h6 class="sidebar-title">Filter Text</h6>
																	<div class="sidebar-module-inner">
																		<p>Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can. Unreserved had she nay dissimilar admiration interested.</p>
																	</div>
																	
																</div>
																
															</div>
															
															<div class="clear"></div>
															
														</div>
														
													</div>
													
												</div>
												
											</div>
										
										</div>

										<div class="sidebar-box hidden-xs">
											<h4 class="sidebar-title">Why Booking With Us?</h4>
											<p>Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can. Unreserved had she nay dissimilar admiration interested.</p>
										</div>
									
									</aside>
									
								</div>
								
							</div>

							<div class="GridLex-col-9_sm-8_xs-12_xss-12">
						
								<div class="content-wrapper mb-10">

									<div class="sorting-wrappper">
										
										<div class="sorting-form">
										
											<div id="change-search" class="collapse"> 
											
												<div class="change-search-wrapper">
												
													<div class="row">
													
														<div class="col-xs-12 col-sm-10 col-md-10">
														
															<div class="row gap-0">
															
																<div class="col-xs-12 col-sm-12 col-md-12">
																
																	<div class="form-group">
																		<input type="text" class="form-control no-br" placeholder="Java Programming">
																	</div>
																
																</div>
																
															</div>
														
														</div>
														
														<div class="col-xs-12 col-sm-2 col-md-2">
															<button class="btn btn-block btn-primary btn-form"><i class="fa fa-search"></i></button>
														</div>
														
													</div>
													
												</div>
											</div>

										</div>
										
										<div class="sorting-header">
										
											<div class="row">
											
												<div class="col-xss-12 col-xs-12 col-sm-7 col-md-9">

                                                    <h4 id="total"></h4>

												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-5 col-md-3">
													<button class="btn btn-primary btn-block btn-toggle collapsed btn-form btn-inverse btn-sm" data-toggle="collapse" data-target="#change-search"></button>
												</div>
												
											</div>
											
											
										</div>
										
										<div class="sorting-content">
										
											<div class="row">
											
												<div class="col-xss-9 col-xs-9 col-sm-9">
													<div class="sort-by-wrapper">
														<label class="sorting-label block-xs">Sort by: </label> 
														<div class="sorting-middle-holder">
															<ul class="sort-by">
                                                                <li class="active up"><a href="#">Name <i class="fa fa-long-arrow-down"></i></a></li>
                                                                <li><a href="#">Rating <i class="fa"></i></a></li>

															</ul>
														</div>
													</div>
												</div>
												
												<div class="col-xss-3 col-xs-3 col-sm-3">
													<div class="sort-by-wrapper for-layout-option">
														<label class="sorting-label">View as: </label> 
														<div class="sorting-middle-holder">
															<a href="<?php echo base_url(); ?>instructor-list" class="btn btn-sorting"><i class="fa fa-th-list"></i></a>
															<a href="<?php echo base_url(); ?>instructor-grid" class="btn btn-sorting active"><i class="fa fa-th-large"></i></a>
														</div>
													</div>
												</div>
												
											</div>
										
										</div>

									</div>

                                    <!-- begin main instructors content -->
									<div class="teacher-item-grid-wrapper" >

                                        <div class="GridLex-gap-20">
                                            <div class="GridLex-grid-noGutter-equalHeight" id="instructors-grid">

                                                <!-- instructors content being added here -->

                                            </div>

                                        </div>

									</div>
                                    <!-- end main instructors content -->

                                    <!-- pagination links -->

                                    <div class="pager-wrappper clearfix" id="pagination">

                                        <div class="pager-innner">

                                            <!-- pagination content here -->

                                        </div>
										
									</div>
                                    <!-- end pagination -->

								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		<!-- end Main Wrapper -->


