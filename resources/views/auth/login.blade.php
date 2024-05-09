@extends('admin-panel.app')
@section('content')

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	

	
	<!-- Sign Up Section -->
    <section class="signup-section login-section" style="background-image:url(images/background/pattern-4.png)">
    	
			<div class="logo">
				<a href="index.html"><img src="images/logo-3.png" alt="" /></a>
			</div>
        	<div class="inner-container">
            	<h2>Welcome Back To <span class="theme_color">Akadimia</span></h2>
				<div class="text">Sign In and Start Learning</div>
				
				<!-- Login Form -->
				<div class="styled-form">
					<form method="post" action="{{ route('login') }}">
						@csrf
						<!-- Form Group -->
						<div class="form-group">
							<input type="email" name="email" value="" placeholder="Email Address" required>
						</div>
						
						<!-- Form Group -->
						<div class="form-group">
							<input type="password" name="password" value="" placeholder="Password" required>
						</div>
						
						<div class="form-group">
							<div class="clearfix">
								<div class="pull-left">
									<div class="check-box">
										<input type="checkbox" name="remember-password" id="type-1"> 
										<label for="type-1">Remember Password</label>
									</div>
								</div>
								<div class="pull-right">
									<a href="#" class="forgot">Forget Password?</a> 
								</div>
							</div>
						</div>
						
						<div class="form-group text-center">
							<button type="submit" class="theme-btn btn-style-one"><span class="txt">login</span></button>
						</div>
						
						<div class="form-group">
							<div class="users">New User? <a href="{{ route('register') }}">Sign Up Now</a></div>
						</div>
						
					</form>
				</div>
				
				<!-- Social Boxed -->
				<div class="social-boxed text-center">
					<a href="#"><span class="icon fa fa-facebook"></span>Continue with Facebook</a>
					<a class="linkedin" href="#"><span class="icon fa fa-linkedin"></span>Continue with Linkedin</a>
					<a class="twitter" href="#"><span class="icon fa fa-twitter"></span>Continue with Twitter</a>
				</div>
				
            </div>
			
			<!-- Copyright -->
			<div class="copyright">Copyright © 2020 AuburnForest</div>
			
        
    </section>
	<!-- End Sign Up Section -->
	
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

<!-- Color Palate / Color Switcher -->
<div class="color-palate">

    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate color-one active" data-theme-file="css/color-themes/theme-one.css"></span>
            <span class="palate color-two" data-theme-file="css/color-themes/theme-two.css"></span>
            <span class="palate color-three" data-theme-file="css/color-themes/theme-three.css"></span>
            <span class="palate color-four" data-theme-file="css/color-themes/theme-four.css"></span>
            <span class="palate color-five" data-theme-file="css/color-themes/theme-five.css"></span>
            <span class="palate color-six" data-theme-file="css/color-themes/theme-six.css"></span>
            <span class="palate color-seven" data-theme-file="css/color-themes/theme-seven.css"></span>
            <span class="palate color-eight" data-theme-file="css/color-themes/theme-eight.css"></span>
			<span class="palate color-nine" data-theme-file="css/color-themes/theme-nine.css"></span>
			<span class="palate color-ten" data-theme-file="css/color-themes/theme-ten.css"></span>
			<span class="palate color-eleven" data-theme-file="css/color-themes/theme-eleven.css"></span>
			<span class="palate color-twelve" data-theme-file="css/color-themes/theme-twelve.css"></span>
        </div>
    </div>

</div>


@endsection