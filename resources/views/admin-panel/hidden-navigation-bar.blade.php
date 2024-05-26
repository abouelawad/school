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
			<li><a href="{{ route('category.index') }}"><span class="icon flaticon-test"></span>Course Categories</a></li>
			<li><a href="latest-courses.html"><span class="icon flaticon-subscription"></span>Latest Courses</a></li>
			<li><a href="course-detail.html"><span class="icon flaticon-new-window"></span>Course Landing</a></li>
			<li><a href="team.html"><span class="icon flaticon-instructor"></span>Popular Instructors</a></li>
		</ul>
		@if (Auth::user())
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
		@endif
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
