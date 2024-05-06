@include('admin-panel.header')

<body class="">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    	
@include('admin-panel.navbar')
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets') }}/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-3 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						
						<!-- Tags Widget -->
                        <div class="sidebar-widget tags-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h6>  المواضيع الرائجه </h6>
								</div>
								<div class="content">
									<ul>
										<li><a href="#">انميشن</a></li>
										<li><a href="#">وردبريس</a></li>
										<li><a href="#">بوتستراب</a></li>
										<li><a href="#">تصميم جرافيك</a></li>
										<li><a href="#"> تصميم المواقع </a></li>
										<li><a href="#">تسويق </a></li>
										<li><a href="#"> رياده أعمال </a></li>
										<li><a href="#"> برمجه التطبيقات </a></li>
										<li><a href="#"> ذكاء صناعي </a></li>
										<li><a href="#"> لغات </a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<!-- Categories Widget -->
                        <div class="sidebar-widget categories-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h6> افضل الأقسام </h6>
								</div>
								<div class="content">
									<ul>
										<li><a href="category.html"><span class="icon flaticon-web-programming"></span> برمجه وتطوير </a></li>
										<li><a href="category.html"><span class="icon flaticon-pie-chart"></span>اداره اعمال</a></li>
										<li><a href="category.html"><span class="icon flaticon-megaphone"></span> تسويق </a></li>
										<li><a href="category.html"><span class="icon flaticon-computer"></span> شبكات </a></li>
										<li><a href="category.html"><span class="icon flaticon-picture"></span> تصوير فوتوغرافي </a></li>
										<li><a href="category.html"><span class="icon flaticon-ux"></span>UX Design</a></li>
									</ul>
									<a href="category.html" class="all-category">View All Categories</a>
								</div>
							</div>
						</div>
						
						<!-- Featured Widget -->
                        <div class="sidebar-widget featured-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h6>Featured Instructors</h6>
								</div>
								<div class="content">
									<div class="featured-carousel owl-carousel owl-theme">
										
										<!-- Feature Block -->
										<div class="featured-block">
											<div class="inner-box">
												<div class="image">
													<a href="instructor-profile.html" class="overlay-link"></a>
													<img src="{{ asset('assets') }}/images/resource/feature-1.jpg" alt="" />
													<!-- Overlay Box -->
													<div class="overlay-box">
														<div class="overlay-inner">
															<div class="overlay-content">
																<!-- Author Image -->
																<div class="author-image">
																	<img src="{{ asset('assets') }}/images/resource/author-5.jpg" alt="" />
																</div>
																<div class="name">Jhon Deo</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Feature Block -->
										<div class="featured-block">
											<div class="inner-box">
												<div class="image">
													<a href="instructor-profile.html" class="overlay-link"></a>
													<img src="{{ asset('assets') }}/images/resource/feature-2.jpg" alt="" />
													<!-- Overlay Box -->
													<div class="overlay-box">
														<div class="overlay-inner">
															<div class="overlay-content">
																<!-- Author Image -->
																<div class="author-image">
																	<img src="{{ asset('assets') }}/images/resource/author-6.jpg" alt="" />
																</div>
																<div class="name">Jhon Deo</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Feature Block -->
										<div class="featured-block">
											<div class="inner-box">
												<div class="image">
													<a href="instructor-profile.html" class="overlay-link"></a>
													<img src="{{ asset('assets') }}/images/resource/feature-3.jpg" alt="" />
													<!-- Overlay Box -->
													<div class="overlay-box">
														<div class="overlay-inner">
															<div class="overlay-content">
																<!-- Author Image -->
																<div class="author-image">
																	<img src="{{ asset('assets') }}/images/resource/author-7.jpg" alt="" />
																</div>
																<div class="name">Jhon Deo</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Feature Block -->
										<div class="featured-block">
											<div class="inner-box">
												<div class="image">
													<a href="instructor-profile.html" class="overlay-link"></a>
													<img src="{{ asset('assets') }}/images/resource/feature-1.jpg" alt="" />
													<!-- Overlay Box -->
													<div class="overlay-box">
														<div class="overlay-inner">
															<div class="overlay-content">
																<!-- Author Image -->
																<div class="author-image">
																	<img src="{{ asset('assets') }}/images/resource/author-5.jpg" alt="" />
																</div>
																<div class="name">Jhon Deo</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Feature Block -->
										<div class="featured-block">
											<div class="inner-box">
												<div class="image">
													<a href="instructor-profile.html" class="overlay-link"></a>
													<img src="{{ asset('assets') }}/images/resource/feature-2.jpg" alt="" />
													<!-- Overlay Box -->
													<div class="overlay-box">
														<div class="overlay-inner">
															<div class="overlay-content">
																<!-- Author Image -->
																<div class="author-image">
																	<img src="{{ asset('assets') }}/images/resource/author-6.jpg" alt="" />
																</div>
																<div class="name">Jhon Deo</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Feature Block -->
										<div class="featured-block">
											<div class="inner-box">
												<div class="image">
													<a href="instructor-profile.html" class="overlay-link"></a>
													<img src="{{ asset('assets') }}/images/resource/feature-3.jpg" alt="" />
													<!-- Overlay Box -->
													<div class="overlay-box">
														<div class="overlay-inner">
															<div class="overlay-content">
																<!-- Author Image -->
																<div class="author-image">
																	<img src="{{ asset('assets') }}/images/resource/author-7.jpg" alt="" />
																</div>
																<div class="name">Jhon Deo</div>
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
						
						<!--  Support Widget -->
                        <div class="sidebar-widget support-widget">
							<div class="widget-content">
								<h5>We are here to help you</h5>
								<div class="text">Lorem ipsum dolor sit amet, con<br>sectetur adipisicing elit, </div>
								<a href="help.html" class="theme-btn btn-style-one"><span class="txt">Support Center</span></a>
							</div>
						</div>
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-9 col-md-12 col-sm-12">
					<!-- Sec Title -->
                	<div class="sec-title">
						<div class="clearfix">
							<div class="pull-left">
								<h4> الدورات المميزة </h4>
							</div>
							<div class="pull-right">
								<a href="featured-courses.html" class="see-all"> عرض الكل </a>
							</div>
						</div>
					</div>
					
					<!-- Featured Section -->
					<div class="featured-section">
						<div class="row clearfix">
							
							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box">
									<div class="content">
										<div class="image">
											<a href="course-lesson.html"><img src="{{ asset('assets') }}/images/resource/feature-4.jpg" alt="" /></a>
										</div>
										<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing</a></h6>
										<div class="text">Lorem ipsum dolor sit amet, Of the consectetur adipiscing</div>
										<div class="author">By: <span>John Smith</span></div>
										<div class="clearfix">
											<div class="pull-left">
												<div class="rating">
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="dark fa fa-star-o"></span>
												</div>
											</div>
											<div class="pull-right">
												<div class="price">$159</div>
											</div>
										</div>
										
										<!-- Featured Dropdown Box -->
										<div class="eps_dots more_dropdown">
											<a href="#"><span></span><i></i></a>
											<div class="dropdown-content">
												<span><i class='flaticon-share'></i>Share</span>
												<span><i class="flaticon-down-arrow-1"></i>Save</span>
												<span><i class='flaticon-cancel'></i>Not Interested</span>
												<span><i class="flaticon-edit-2"></i>Report</span>
											 </div>																										
										</div>
										
									</div>
								</div>
							</div>
							
							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box">
									<div class="content">
										<div class="image">
											<a href="course-lesson.html"><img src="{{ asset('assets') }}/images/resource/feature-5.jpg" alt="" /></a>
										</div>
										<h6><a href="course-lesson.html">Master in website design and prototyping in sketch</a></h6>
										<div class="text">Lorem ipsum dolor sit amet, Of the consectetur adipiscing</div>
										<div class="author">By: <span>John Smith</span></div>
										<div class="clearfix">
											<div class="pull-left">
												<div class="rating">
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="dark fa fa-star-o"></span>
												</div>
											</div>
											<div class="pull-right">
												<div class="price">$159</div>
											</div>
										</div>
										
										<!-- Featured Dropdown Box -->
										<div class="eps_dots more_dropdown">
											<a href="#"><span></span><i></i></a>
											<div class="dropdown-content">
												<span><i class='flaticon-share'></i>Share</span>
												<span><i class="flaticon-down-arrow-1"></i>Save</span>
												<span><i class='flaticon-cancel'></i>Not Interested</span>
												<span><i class="flaticon-edit-2"></i>Report</span>
											 </div>																										
										</div>
										
									</div>
								</div>
							</div>
							
							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box">
									<div class="content">
										<div class="image">
											<a href="course-lesson.html"><img src="{{ asset('assets') }}/images/resource/feature-6.jpg" alt="" /></a>
										</div>
										<h6><a href="course-lesson.html">Build responsive real world websites with HTML5 and CSS3</a></h6>
										<div class="text">Lorem ipsum dolor sit amet, Of the consectetur adipiscing</div>
										<div class="author">By: <span>John Smith</span></div>
										<div class="clearfix">
											<div class="pull-left">
												<div class="rating">
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="dark fa fa-star-o"></span>
												</div>
											</div>
											<div class="pull-right">
												<div class="price">$159</div>
											</div>
										</div>
										
										<!-- Featured Dropdown Box -->
										<div class="eps_dots more_dropdown">
											<a href="#"><span></span><i></i></a>
											<div class="dropdown-content">
												<span><i class='flaticon-share'></i>Share</span>
												<span><i class="flaticon-down-arrow-1"></i>Save</span>
												<span><i class='flaticon-cancel'></i>Not Interested</span>
												<span><i class="flaticon-edit-2"></i>Report</span>
											 </div>																										
										</div>
										
									</div>
								</div>
							</div>
							
							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box">
									<div class="content">
										<div class="image">
											<a href="course-lesson.html"><img src="{{ asset('assets') }}/images/resource/feature-7.jpg" alt="" /></a>
										</div>
										<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing </a></h6>
										<div class="text">Lorem ipsum dolor sit amet, Of the consectetur adipiscing</div>
										<div class="author">By: <span>John Smith</span></div>
										<div class="clearfix">
											<div class="pull-left">
												<div class="rating">
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="dark fa fa-star-o"></span>
												</div>
											</div>
											<div class="pull-right">
												<div class="price">$159</div>
											</div>
										</div>
										
										<!-- Featured Dropdown Box -->
										<div class="eps_dots more_dropdown">
											<a href="#"><span></span><i></i></a>
											<div class="dropdown-content">
												<span><i class='flaticon-share'></i>Share</span>
												<span><i class="flaticon-down-arrow-1"></i>Save</span>
												<span><i class='flaticon-cancel'></i>Not Interested</span>
												<span><i class="flaticon-edit-2"></i>Report</span>
											 </div>																										
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- End Featured Section -->
					
					<!-- Courses Section -->
					<div class="courses-section">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="clearfix">
								<div class="pull-left">
									<h4>Latest Courses</h4>
								</div>
								<div class="pull-right">
									<a href="latest-courses.html" class="see-all">See All</a>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							
							<!-- Course Block -->
							<div class="course-block col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="course-lesson.html"><img src="{{ asset('assets') }}/images/resource/course-1.jpg" alt="" /></a>
										<div class="time">13 hours</div>
									</div>
									<div class="lower-content">
										<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing</a></h6>
										<ul class="post-meta">
											<li>Development</li>
											<li>JavaScript</li>
										</ul>
										<div class="clearfix">
											<div class="pull-left">
												<div class="author">By: <span>John Smith</span></div>
											</div>
											<div class="pull-right">
												<div class="price">$15</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Course Block -->
							<div class="course-block col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="course-lesson.html"><img src="{{ asset('assets') }}/images/resource/course-2.jpg" alt="" /></a>
										<div class="time">13 hours</div>
									</div>
									<div class="lower-content">
										<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing</a></h6>
										<ul class="post-meta">
											<li>Development</li>
											<li>JavaScript</li>
										</ul>
										<div class="clearfix">
											<div class="pull-left">
												<div class="author">By: <span>John Smith</span></div>
											</div>
											<div class="pull-right">
												<div class="price">$15</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Course Block -->
							<div class="course-block col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="course-lesson.html"><img src="{{ asset('assets') }}/images/resource/course-3.jpg" alt="" /></a>
										<div class="time">13 hours</div>
									</div>
									<div class="lower-content">
										<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing</a></h6>
										<ul class="post-meta">
											<li>Development</li>
											<li>JavaScript</li>
										</ul>
										<div class="clearfix">
											<div class="pull-left">
												<div class="author">By: <span>John Smith</span></div>
											</div>
											<div class="pull-right">
												<div class="price">$15</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- End Courses Section -->
					
					<!-- Team Section -->
					<div class="team-section">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="clearfix">
								<div class="pull-left">
									<h4>Popular Instructors</h4>
								</div>
								<div class="pull-right">
									<a href="team.html" class="see-all">See All</a>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							
							<!-- Team Block -->
							<div class="team-block col-lg-3 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="instructor-profile.html"><img src="{{ asset('assets') }}/images/resource/team-1.jpg" alt="" /></a>
									</div>
									<div class="name"><a href="instructor-profile.html">Gleb Kutnesuv</a></div>
									<div class="designation">Web Design, Dreamnet</div>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit dolor sit amet.</div>
									<div class="courses">3 Courses, 20+ Students</div>
									<ul class="social-box">
										<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
										<li class="google"><a href="#" class="fa fa-google"></a></li>
										<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									</ul>
								</div>
							</div>
							
							<!-- Team Block -->
							<div class="team-block col-lg-3 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="instructor-profile.html"><img src="{{ asset('assets') }}/images/resource/team-2.jpg" alt="" /></a>
									</div>
									<div class="name"><a href="instructor-profile.html">Kerstein Setia</a></div>
									<div class="designation">Web Design, Dreamnet</div>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit dolor sit amet.</div>
									<div class="courses">3 Courses, 20+ Students</div>
									<ul class="social-box">
										<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
										<li class="google"><a href="#" class="fa fa-google"></a></li>
										<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									</ul>
								</div>
							</div>
							
							<!-- Team Block -->
							<div class="team-block col-lg-3 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="instructor-profile.html"><img src="{{ asset('assets') }}/images/resource/team-3.jpg" alt="" /></a>
									</div>
									<div class="name"><a href="instructor-profile.html">Dann Pety</a></div>
									<div class="designation">Web Design, Dreamnet</div>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit dolor sit amet.</div>
									<div class="courses">3 Courses, 20+ Students</div>
									<ul class="social-box">
										<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
										<li class="google"><a href="#" class="fa fa-google"></a></li>
										<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									</ul>
								</div>
							</div>
							
							<!-- Team Block -->
							<div class="team-block col-lg-3 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="instructor-profile.html"><img src="{{ asset('assets') }}/images/resource/team-4.jpg" alt="" /></a>
									</div>
									<div class="name"><a href="instructor-profile.html">Chalvet Berthely</a></div>
									<div class="designation">Web Design, Dreamnet</div>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit dolor sit amet.</div>
									<div class="courses">3 Courses, 20+ Students</div>
									<ul class="social-box">
										<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
										<li class="google"><a href="#" class="fa fa-google"></a></li>
										<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					<!-- End Team Section -->
					
					<!-- Testimonial Section -->
					<div class="testimonial-section">
						<!-- Sec Title -->
						<div class="sec-title">
							<h4>What our students say</h4>
						</div>
						<div class="testimonial-carousel owl-carousel owl-theme">
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="quote flaticon-quote"></div>
									<div class="image">
										<img src="{{ asset('assets') }}/images/resource/author-8.jpg" alt="" />
									</div>
									<div class="name">Gleb Kutnesuv</div>
									<div class="designation">Student</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="quote flaticon-quote"></div>
									<div class="image">
										<img src="{{ asset('assets') }}/images/resource/author-9.jpg" alt="" />
									</div>
									<div class="name">Gleb Kutnesuv</div>
									<div class="designation">Student</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="quote flaticon-quote"></div>
									<div class="image">
										<img src="{{ asset('assets') }}/images/resource/author-8.jpg" alt="" />
									</div>
									<div class="name">Gleb Kutnesuv</div>
									<div class="designation">Student</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="quote flaticon-quote"></div>
									<div class="image">
										<img src="{{ asset('assets') }}/images/resource/author-9.jpg" alt="" />
									</div>
									<div class="name">Gleb Kutnesuv</div>
									<div class="designation">Student</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- End Testimonial Section -->
					
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- Main Footer -->
    <footer class="main-footer">
		<!-- Pattern Layer -->
		<div class="pattern-layer" style="background-image:url(images/background/pattern-2.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-3.png)"></div>
		<!-- Upper Box -->
		<div class="upper-box">
			<div class="auto-container">
				<h4>Subscribe to know our <br> every single updates</h4>
				
				<!-- Subscribe Form -->
				<div class="subscribe-form">
					<form method="post" action="https://demo.auburnforest.com/html/akadimia/akadimia/contact.html">
						<div class="form-group clearfix">
							<span class="icon flaticon-mail"></span>
							<input type="email" name="email" value="" placeholder="Please Enter Your Email" required>
							<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe Now</span></button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
		
		<div class="auto-container">
		
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="{{ asset('assets') }}/images/footer-logo.png" alt="" /></a>
                                    </div>
									<div class="text">There are many variations of passages of Lorem Ipsum available,</div>
									<div class="social-box">
										<a href="#" class="fa fa-facebook-square"></a>
										<a href="#" class="fa fa-twitter-square"></a>
										<a href="#" class="fa fa-linkedin-square"></a>
									</div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<ul class="links-widget">
										<li><a href="#">Afficiates</a></li>
										<li><a href="#">Partners</a></li>
										<li><a href="#">Reviews</a></li>
										<li><a href="#">Blogs</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<ul class="links-widget">
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Support Area</a></li>
										<li><a href="#">Documentations</a></li>
										<li><a href="#">How it works</a></li>
										<li><a href="#">Terms of Policy</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<ul class="links-widget">
										<li><a href="#">home</a></li>
										<li><a href="#">About us</a></li>
										<li><a href="#">Features</a></li>
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom text-center">
				<div class="copyright">Copyright &copy; 2020 AuburnForest</div>
			</div>
			
		</div>
	</footer>
	
</div>
<!-- End pagewrapper -->

@include('admin-panel.sidebar')

@include('admin-panel.hidden-navigation-bar')

<!--Scroll to top-->
@include('admin-panel.footer')