    	<!-- Header Upper -->
      <div class="header-upper ">
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
                  @guest
          
                  <li><a href="{{ route('login') }}">LogIn</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                
                @endguest

                </ul>
              </div>
              
            </nav>
            
          </div>
          
          <!-- Options Box -->
          @if (Auth::user())            
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
                  <li> <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></li>
                {{-- logout form --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                </ul>
              </div>
            </div>
            
          </div>
          @endif
 
        </div>
        
              </div>
          </div>
      </div>
      <!--End Header Upper-->
     
