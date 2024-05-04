<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title> كونكورد أكاديمى </title>
<!-- Stylesheets -->
<link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('assets') }}/css/main.css" rel="stylesheet">
<link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="{{ asset('assets') }}/css/color-switcher-design.css" rel="stylesheet">
<!-- Color Themes -->
<link id="theme-color-file" href="{{ asset('assets') }}/css/color-themes/theme-one.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('assets') }}/js/respond.js"></script><![endif]-->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&family=Tajawal:wght@500;700&display=swap" rel="stylesheet">
<style>
	h1 , h2 , h3 , h4 , h5 , h6 , p , div , ul , li a , input , button {
		font-family: 'Cairo', sans-serif !important;
		line-height: 1.7; 
	}
</style>
</head>

<body class="">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    	
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="outer-container">
            	<div class="clearfix">
                	
					<!-- Header Left -->
					<div class="header-left clearfix">

						<!-- Left Sidebar Btn -->
						<div class="left-sidebar-btn hidden-bar-opener">
							<span class="icon flaticon-menu-2"></span>
						</div>
						
						<div class="pull-left logo-box">
							<div class="logo"><a href="index.html"><img src="{{ asset('assets') }}/images/logo.png" alt="" title=""></a></div>
							<div class="dark-layout-logo"><a href="index.html"><img src="{{ asset('assets') }}/images/logo-4.png" alt="" title=""></a></div>
						</div>
						
						<!-- Search -->
                        <div class="search-box">
                        	<form method="post" action="https://demo.auburnforest.com/html/akadimia/akadimia/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="بحث عن دورة ..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
					</div>
					
					<!-- Header Right -->
					<div class="header-right clearfix">
						
						<div class="nav-outer clearfix">
                    
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="dropdown"><a href="#">الدورات</a>
											<ul>
												<li><a href="featured-courses.html"> الدورات المميزه </a></li>
												<li><a href="latest-courses.html"> أحدث الدورات </a></li>
												<li><a href="category.html"> المحاضرين </a></li>
												<li><a href="course-detail.html">Course </a></li>
												<li><a href="course-lesson.html">Course Lesson</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">المحاضرين</a>
											<ul>
												<li><a href="dashboard.html">Instructor Dashboard</a></li>
												<li><a href="manage-course.html">Manage Courses</a></li>
												<li><a href="edit-course.html">Edit Course</a></li>
												<li><a href="earning.html">Earnings</a></li>
												<li><a href="instructor-profile.html">Instructor Profile</a></li>
												<li><a href="team.html">Popular Instructors</a></li>
											</ul>
										</li>
										<li  ><a href="#">المنتدى</a> </li>
										<li  ><a href="price.html">خطط الأسعار </a> </li>
									</ul>
								</div>
								
							</nav>
							
						</div>
						
						<!-- Options Box -->
						<div class="options-box clearfix">
							
							<!-- Message Box -->
							<div class="message-box">
								<a href="#" class="icon flaticon-envelope"></a>
							</div>
							<!-- End Message Box -->
							
							<!-- Notification Box -->
							<div class="notification-box">
								<div class="dropdown">
									<button class="notification-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-notification"></span><i class="notification-alert"></i></button>
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu">

										<div class="notification-block">
											<div class="inner">
												<div class="image"><img src="{{ asset('assets') }}/images/resource/author-1.jpg" alt="" /></div>
												<h3><a href="#">Jessica Parl</a></h3>
												<div class="notification-text">It is a long established fact that a most reader will be distracted by the way readable</div>
												<div class="post-time">15 min ago</div>
											</div>
										</div>
										<div class="notification-block">
											<div class="inner">
												<div class="image"><img src="{{ asset('assets') }}/images/resource/author-2.jpg" alt="" /></div>
												<h3><a href="#">David John</a></h3>
												<div class="notification-text">It is a long established fact that a like reader will</div>
												<div class="post-time">15 min ago</div>
											</div>
										</div>
										<div class="notification-block">
											<div class="inner">
												<div class="image"><img src="{{ asset('assets') }}/images/resource/author-3.jpg" alt="" /></div>
												<h3><a href="#">Jonathon Deo</a></h3>
												<div class="notification-text">It is a long established fact that a reader will</div>
												<div class="post-time">15 min ago</div>
											</div>
										</div>
										
										<a href="#" class="view">View All</a>
										
									</div>
								</div>
							</div>
							<!-- End Notification Box -->
							
							<!-- Profile Box -->
							<div class="profile-box dropdown" id="someElementID5">
								<div class="btn btn-default dropdown-toggle">
									<span class="profile-image"><img src="{{ asset('assets') }}/images/resource/author-4.jpg" alt="" /></span> <i class="arrow flaticon-down-arrow"></i>
								</div>
								<div class="profile-content">
									<div class="setting"><a href="setting.html">Settings</a></div>
									<!-- Dark Mode -->
									<div class="dark-mode">
										<div class="clearfix">
											<div class="pull-left">
												<div class="mode"><span class="icon"><img src="{{ asset('assets') }}/images/icons/moon.png" alt="" /></span> Dark Mode</div>
											</div>
											<div class="pull-right">
												<!-- Dark Btns -->
												<ul class="dark-buttons clearfix">
													<li data-tab="#" class="off">Off</li>
													<li class="boll"><span class="round"></span></li>
													<li data-tab="#" class="on">On</li>
												</ul>	
											</div>
										</div>
									</div>
									<!-- Pages -->
									<ul class="pages">
										<li><a href="login.html">Sign In</a></li>
										<li><a href="sign-up.html">Sign Up</a></li>
										<li><a href="feedback.html">Feedback</a></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="help.html">Help</a></li>
									</ul>
								</div>
							</div>
							
						</div>
						
					</div>
					
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
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

<!-- Sidebar Nav -->
<div class="sidenav-list">
	<ul class="navbar">
		<li><a href="index.html"><i class="icon flaticon-home"></i> <span><i class="flaticon-home"></i> Home</span></a></li>
		<li><a href="course-lesson.html"><i class="icon flaticon-book"></i> <span><i class="flaticon-book"></i>Course Lesson</span></a></li>
		<li><a href="category.html"><i class="icon flaticon-test"></i> <span><i class="flaticon-test"></i>Categories</span></a></li>
		<li><a href="dashboard.html"><i class="icon flaticon-report"></i> <span><i class="flaticon-report"></i>Dashboard</span></a></li>
		<li><a href="manage-course.html"><i class="icon flaticon-test"></i> <span><i class="flaticon-test"></i>Manage Course</span></a></li>
		<li><a href="earning.html"><i class="icon flaticon-pie-chart-1"></i> <span><i class="flaticon-pie-chart-1"></i>Earning</span></a></li>
		<li><a href="enrolled-courses.html"><i class="icon flaticon-file"></i> <span><i class="flaticon-file"></i>Enrolled Courses</span></a></li>
		<li><a href="certificate.html"><i class="icon flaticon-new-window"></i> <span><i class="flaticon-new-window"></i>Certificate</span></a></li>
		<li><a href="team.html"><i class="icon flaticon-file"></i> <span><i class="flaticon-file"></i>Instructors</span></a></li>
        <li><a href="contact.html"><i class="icon flaticon-contact"></i> <span><i class="flaticon-contact"></i>Contact Us</span></a></li>
		<li><a href="help.html"><i class="icon flaticon-information"></i> <span><i class="flaticon-information"></i>Help</span></a></li>
	</ul>
</div>
<!-- End Sidebar Nav -->

<!-- Hidden Navigation Bar -->
<section class="hidden-bar left-align">
	<div class="color-layer"></div>
	<div class="hidden-bar-closer">
		<span class="flaticon-multiply"></span>
	</div>
	<!-- Hidden Bar Wrapper -->
	<div class="hidden-bar-wrapper">
		<ul class="pages-list">
			<li class="active"><a href="index.html"><span class="icon flaticon-home"></span>Home</a></li>
			<li><a href="featured-courses.html"><span class="icon flaticon-book"></span>Featured Courses</a></li>
			<li><a href="course-lesson.html"><span class="icon flaticon-category"></span>Courses Lesson</a></li>
			<li><a href="category.html"><span class="icon flaticon-test"></span>Course Categories</a></li>
			<li><a href="latest-courses.html"><span class="icon flaticon-subscription"></span>Latest Courses</a></li>
			<li><a href="course-detail.html"><span class="icon flaticon-new-window"></span>Course Landing</a></li>
			<li><a href="team.html"><span class="icon flaticon-instructor"></span>Popular Instructors</a></li>
		</ul>
		<div class="heading">Instructor</div>
		<ul class="pages-list">
			<li><a href="dashboard.html"><span class="icon flaticon-home"></span>Dashboard</a></li>
			<li><a href="manage-course.html"><span class="icon flaticon-test"></span>Manage Courses</a></li>
			<li><a href="earning.html"><span class="icon flaticon-scholarship"></span>Earnings</a></li>
			<li><a href="edit-course.html"><span class="icon flaticon-report"></span>Edit Course</a></li>
			<li><a href="instructor-profile.html"><span class="icon flaticon-file"></span>Instructor Profile</a></li>
		</ul>
		<div class="heading">Student</div>
		<ul class="pages-list">
			<li><a href="price.html"><span class="icon flaticon-money-bag"></span>Pricing</a></li>
			<li><a href="enrolled-courses.html"><span class="icon flaticon-test"></span>Enrolled Courses</a></li>
			<li><a href="certificate.html"><span class="icon flaticon-skills"></span>Certificate Center</a></li>
			<li><a href="test.html"><span class="icon flaticon-quiz"></span>Quiz</a></li>
			<li><a href="result.html"><span class="icon flaticon-document"></span>Quiz Result</a></li>
			<li><a href="student-profile.html"><span class="icon flaticon-student"></span>Student Profile</a></li>
		</ul>
		<div class="heading">Pages</div>
		<ul class="pages-list">
			<li><a href="blog.html"><span class="icon flaticon-social-media"></span>Blog</a></li>
			<li><a href="blog-detail.html"><span class="icon flaticon-article"></span>Blog Detail</a></li>
			<li><a href="not-found.html"><span class="icon flaticon-garbage"></span>Not Found</a></li>
			<li><a href="login.html"><span class="icon flaticon-contract"></span>Sign In</a></li>
			<li><a href="sign-up.html"><span class="icon flaticon-clipboard"></span>Sign Up</a></li>
			<li><a href="feedback.html"><span class="icon flaticon-thumb-up"></span>Feedback</a></li>
			<li><a href="checkout.html"><span class="icon flaticon-checkout"></span>Checkout</a></li>
			<li><a href="contact.html"><span class="icon flaticon-contact"></span>Contact Us</a></li>
			<li><a href="setting.html"><span class="icon flaticon-settings-1"></span>Settings</a></li>
			<li><a href="help.html"><span class="icon flaticon-information"></span>Help</a></li>
		</ul>
	</div>
	<!--Copyright Text-->
	<div class="copyright-text">Copyright &copy; 2020 Genter</div>
</section>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

 

<script src="{{ asset('assets') }}/js/jquery.js"></script>
<script src="{{ asset('assets') }}/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('assets') }}/js/appear.js"></script>
<script src="{{ asset('assets') }}/js/isotope.js"></script>
<script src="{{ asset('assets') }}/js/owl.js"></script>
<script src="{{ asset('assets') }}/js/wow.js"></script>
<script src="{{ asset('assets') }}/js/jquery-ui.js"></script>
<script src="{{ asset('assets') }}/js/script.js"></script>
<script src="{{ asset('assets') }}/js/color-settings.js"></script>

</body>

</html>