@extends('admin-panel.app')
@section('content')

	<body class="">

		<div class="page-wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>



			<!-- Sidebar Page Container -->

			<div class="auto-container">
				<div class="row clearfix">


					<!-- Dashboard Section -->
					<div class="dashboard-section">
						<div class="auto-container">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="clearfix">
									<div class="pull-left">
										<h4>Sales Dashboard</h4>
									</div>
									<div class="pull-right">
										<a href="edit-course.html" class="see-all">Create Your Course</a>
									</div>
								</div>
							</div>

							<div class="row clearfix">

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-article"></span>
											</div>
											<div class="courses">Daily sales<span>150</span></div>
										</div>
									</div>
								</div>

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-coding"></span>
											</div>
											<div class="courses">Total Sales<span>3506</span></div>
										</div>
									</div>
								</div>

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-dollar-sign"></span>
											</div>
											<div class="courses">Today Sales<span>$1.5k</span></div>
										</div>
									</div>
								</div>

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-scholarship"></span>
											</div>
											<div class="courses">Total revenue<span>$1.5k</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="row clearfix">
								<div class="sec-title">
								<div class="clearfix">
									<div class="pull-left">
										<h4>Members Dashboard</h4>
									</div>
								</div>
								</div>

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-article"></span>
											</div>
											<div class="courses">Total students<span>150</span></div>
										</div>
									</div>
								</div>

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-coding"></span>
											</div>
											<div class="courses">Total instructors<span>3506</span></div>
										</div>
									</div>
								</div>

								{{-- <!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-dollar-sign"></span>
											</div>
											<div class="courses">Account balance<span>$1.5k</span></div>
										</div>
									</div>
								</div> --}}

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-scholarship"></span>
											</div>
											<div class="courses">Total Administrators<span>$1.5k</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- courses news -->

							<div class="row clearfix">
								<div class="sec-title">
								<div class="clearfix">
									<div class="pull-left">
										<h4>courses news</h4>
									</div>
								</div>
								</div>

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-article"></span>
											</div>
											<div class="courses">Total courses<span>150</span></div>
										</div>
									</div>
								</div>

								<!-- Dashboard Block -->
								<div class="dashboard-block col-lg-3 col-md-3 col-sm-3">
									<div class="inner-box">
										<div class="content">
											<div class="icon-box">
												<span class="icon flaticon-coding"></span>
											</div>
											<div class="courses">upcoming courses<span>3506</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="row clearfix">
								<!-- Earning Section -->
								<div class="earning-section">
									<div class="auto-container">
										<!-- Sec Title -->
										<div class="sec-title">
											<div class="clearfix">
												<h4>Earnings</h4>
												<div class="pull-right">
													<a href="earning.html" class="see-all">View Earnings</a>
												</div>
											</div>
										</div>

										<!-- Earning Graph Box -->
										<div class="earning-graph-box">
											<div class="inner-graph-box">
												<div class="row clearfix">

													<!-- Earning Block -->
													<div class="earning-block col-lg-4 col-md-6 col-sm-12">
														<div class="inner-box">
															<div class="content">
																<div class="icon-box">
																	<span class="icon flaticon-dollar-sign"></span>
																</div>
																<div class="courses">Total Revenue<span>$7, 500.00</span><i>$5.00 this month</i></div>
															</div>
														</div>
													</div>

													<!-- Earning Block -->
													<div class="earning-block col-lg-4 col-md-6 col-sm-12">
														<div class="inner-box">
															<div class="content">
																<div class="icon-box">
																	<span class="icon flaticon-coding"></span>
																</div>
																<div class="courses">Total Enrollments<span>13,536</span><i>25 this month</i></div>
															</div>
														</div>
													</div>

												</div>

												<!-- Graph Box -->
												<div class="graph-box">
													<!-- Graph -->
													<canvas id="canvas" style="height: 430px; width: 100%;"></canvas>
												</div>

											</div>
										</div>
									</div>
								</div>
								<!-- End Earning Section -->
							</div>




							<!-- Sec Title -->
							<div class="sec-title">
								<h4>Most Viewed Courses</h4>
							</div>

							<div class="single-item-carousel owl-carousel owl-theme">

								<div class="slide">
									<div class="row clearfix">

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-10.jpg" alt="" /></a>
													<div class="time">03 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Juan Annatoo</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$15</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-11.jpg" alt="" /></a>
													<div class="time">15 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Complete Python Bootcamp: Go from zero to hero in Python 3</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Hap E. Birthday</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$15</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-12.jpg" alt="" /></a>
													<div class="time">07 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">The Web Developer Bootcamp and Learning</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Curt N. Call</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$79</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-13.jpg" alt="" /></a>
													<div class="time">13 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Machine Learning A-Z™: Hands-On Python & R In Data Science</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Marvin Gardens</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$45</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="slide">
									<div class="row clearfix">

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-10.jpg" alt="" /></a>
													<div class="time">03 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Juan Annatoo</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$15</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-11.jpg" alt="" /></a>
													<div class="time">15 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Complete Python Bootcamp: Go from zero to hero in Python 3</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Hap E. Birthday</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$15</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-12.jpg" alt="" /></a>
													<div class="time">07 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">The Web Developer Bootcamp and Learning</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Curt N. Call</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$79</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-13.jpg" alt="" /></a>
													<div class="time">13 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Machine Learning A-Z™: Hands-On Python & R In Data Science</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Marvin Gardens</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$45</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="slide">
									<div class="row clearfix">

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-10.jpg" alt="" /></a>
													<div class="time">03 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Learn IOS development, Website design, Freelancing</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Juan Annatoo</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$15</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-11.jpg" alt="" /></a>
													<div class="time">15 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Complete Python Bootcamp: Go from zero to hero in Python 3</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Hap E. Birthday</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$15</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-12.jpg" alt="" /></a>
													<div class="time">07 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">The Web Developer Bootcamp and Learning</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Curt N. Call</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$79</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Course Block -->
										<div class="course-block col-lg-4 col-md-4 col-sm-4">
											<div class="inner-box">
												<div class="image">
													<a href="course-lesson.html"><img src="images/resource/course-13.jpg" alt="" /></a>
													<div class="time">13 hours</div>
												</div>
												<div class="lower-content">
													<h6><a href="course-lesson.html">Machine Learning A-Z™: Hands-On Python & R In Data Science</a></h6>
													<ul class="post-meta">
														<li>Development</li>
														<li>JavaScript</li>
													</ul>
													<div class="clearfix">
														<div class="pull-left">
															<div class="author">By: <span>Marvin Gardens</span></div>
														</div>
														<div class="pull-right">
															<div class="price">$45</div>
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
	@endsection


	@section('scripts')
		<!-- Chart -->
		<script src="{{ asset('assets') }}/js/canvasjs.min.js"></script>
		<script src="{{ asset('assets') }}/js/charts-script.js"></script>
		<script>
			var lineChartData = {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					borderColor: window.chartColors.red,
					backgroundColor: window.chartColors.red,
					fill: false,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					yAxisID: 'y-axis-1',
				}, {
					label: 'My Second dataset',
					borderColor: window.chartColors.blue,
					backgroundColor: window.chartColors.blue,
					fill: false,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					yAxisID: 'y-axis-2'
				}]
			};

			window.onload = function() {
				var ctx = document.getElementById('canvas').getContext('2d');
				window.myLine = Chart.Line(ctx, {
					data: lineChartData,
					options: {
						responsive: true,
						hoverMode: 'index',
						stacked: false,
						title: {
							display: true,
							text: 'Chart.js Line Chart - Multi Axis'
						},
						scales: {
							yAxes: [{
								type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
								display: true,
								position: 'left',
								id: 'y-axis-1',
							}, {
								type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
								display: true,
								position: 'right',
								id: 'y-axis-2',

								// grid line settings
								gridLines: {
									drawOnChartArea: false, // only want the grid lines for one axis to show up
								},
							}],
						}
					}
				});
			};

			document.getElementById('randomizeData').addEventListener('click', function() {
				lineChartData.datasets.forEach(function(dataset) {
					dataset.data = dataset.data.map(function() {
						return randomScalingFactor();
					});
				});

				window.myLine.update();
			});
		</script>
	@endsection
