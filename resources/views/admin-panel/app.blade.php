@include('admin-panel.header')

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<header class="main-header fixed-header">

			@include('admin-panel.navbar')
			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon fa fa-remove"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index.html"><img src="{{ asset('assets') }}/images/logo.png" alt=""
								title=""></a></div>
					<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				</nav>
			</div><!-- End Mobile Menu -->

		</header>
		<!--End Main Header -->

		<!-- Sidebar Page Container -->
		
			
		<div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
						
					
							
							@yield('content')
					
				
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
	
