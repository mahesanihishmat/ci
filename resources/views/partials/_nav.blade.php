<!-- Header 1
============================================ -->
<style type="text/css">
	.header-top{
		background: #fff;
	}
	.header-top-wrapper{
	    padding: 10px 0 0px;
	}
	.header-top-wrapper p{
		color:#000;
		/*font-size: 16px !important;*/
	}
	.header-top-wrapper p span{
		color:#000;
		/*font-size: 16px !important;*/
	}
	.header-transparent{
		/*background: #2c2e94;*/
	}
	.find-course-form{
display: none;
	}
	.header-logo, .navbar-header{
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.stick .header-logo, .stick .navbar-header{
		margin-top: 5px;
		margin-bottom: 5px;
	}
.main-menu nav > ul > li + li {
    margin-left: 7px;
}
.main-menu nav > ul ul{
	    left: 0px;
}
.main-menu{
	margin-top: 5px;
}
.header-top-emirates{
	    margin-top: -2px;
    margin-bottom: -16px;
}
.header-top-emirates span{
	margin-right: 5px;
}
.hero-static {
    background: transparent;
    padding: 260px 0 160px;
}

.btn-header-login{

    border: 1px solid #333;
    border-radius: 0;
    color: #333;
    display: inline-block;
    /* height: 29px; */
    line-height: 26px;
    padding: 0 20px;
    margin-top: 5px;
    /* text-transform: uppercase; */
}
.dropdown-menu{
	/*left: 20px;*/
	width: 100%;
}
.dropdown-menu>li>a{
	width: 100%;
	    white-space: inherit;
}

</style>
<div class="header-area header-absolute header-transparent">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<!-- Header Top -->
				<div class="header-top-wrapper fix">
					<div class="header-top-left text-center col-md-2 col-sm-12">
						<p><i class="icofont icofont-envelope"></i><span>info@civil.ae &nbsp;&nbsp;&nbsp;&nbsp;</span></p>
						<p style="margin-left: 0px;"><i class="icofont icofont-ui-call"></i><span>+971 42276330</span></p>
						<p style="margin-left: 0px;"><i class="icofont icofont-ui-cell-phone"></i><span>+971502596523</span></p>
						
					</div>

					<div class="header-top-left text-center col-md-8 col-sm-12  hidden-xs">
						<h2  style="text-align: center;    color: #2c2e94;
					    font-size: 40px;
					    font-weight: 900;">CIVIL GROUP OF INSTITUTES</h2>
						<p><ul class="text-center" style="margin-top: -32px;
							    margin-bottom: 5px;
							    font-size: 20px;
							    padding-left: 0px;
							    color: #2c2e94;">
			                  <span>Civil Vocational Training Institute</span>
			                  <span>- Civil Training Institute</span>
			                  <span>- Civil Driving Institute</span>
			              </ul>
			          <ul class="header-top-emirates text-center">
			                  <span>DUBAI</span>
			                  <span>-</span>
			                  <span>SHARJAH</span>
			                  <span>-</span>
			                  <span>AJMAN</span>
			                  <span>-</span>
			                  <span>UMM AL QUWAIN</span>
			                  <span>-</span>
			                  <span>ABU DHABI</span>  
			              </ul>
			          </p>
					</div>
					<div class="header-top-right text-center col-md-2 col-sm-12">
						
							

						@if (Auth::check())

						<div class="dropdown">
						  <button class="btn-header-login dropdown-toggle" type="button" data-toggle="dropdown">Welcome {{Auth::user()->name}}
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						    <li><a href="/logout">{{Auth::user()->roles[0]->name}} Dashboard</a></li>
						    <li><a href="/logout">Logout</a></li>
						  </ul>
						</div>

						@else
							<p class="btn-header-login">
								
							<a style="" href="/login">Login</a> /
							<a style="" href="/register">Register</a>
								
							</p>

							

						@endif 

							<div style="margin-top: 10px;" id="google_translate_element"></div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom sticky">
		<div class="container container-nav">
			<div class="row">
				<!-- Header Bottom -->
				<div class="col-xs-12">
					<div class="navbar-header">
						<a href="/" class="logo navbar-brand"><img id="logo_img" src="img/logo/color-1.png" alt="logo" /></a>
					</div>
					<div class="main-menu menu-style-7 mean-menu float-right">
						<nav>
							<ul>
								<li class="{{$data['active']=='home' ? "active": ""}}"><a href="/">Home</a></li>
								<li  class="{{$data['active']=='about' ? "active": ""}}"><a href="#">About<i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="{{route('company-profile') }}">Company profile</a></li>
										<li><a href="{{route('mission-vision')}}">Mission & Vision</a></li>
										<li><a href="{{route('accreditation')}}">Accreditation & Membership</a></li>
										<li><a href="{{route('clients')}}">Our Clients</a></li>
										
									</ul>
								</li>
								<li style="display: none;" class="{{$data['active']=='corporate-services' ? "active": ""}}"><a href="/corporate-services">Corporate Services</a></li>
								
								<li class="{{$data['active']=='driving-courses' ? "active": ""}}" ><a href="#" >Learner & Driving courses <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="{{route('car-driving-course')}}">Car driving</a></li>
										
										<li><a href="{{route('golden-driving-course')}}">Golden driving</a></li>
										
										<li><a href="{{route('motorcycle-driving-course')}}">Motorcycle</a></li>
										
										<li><a href="{{route('platinum-driving-course')}}">Platinum driving</a></li>
										<li><a href="{{route('platinum-driving-course')}}">Corporate Training</a></li>
										
										<li><a href="{{route('heavy-truck-driving-course')}}">Heavy truck </a></li>
										
										<li><a href="{{route('heavy-bus-driving-course')}}">Heavy bus</a></li>
										
										<li><a href="{{route('light-bus-driving-course')}}">Light bus</a></li>
										
										<li><a href="{{route('forklift-driving-course')}}">Fork lift</a></li>
										
										<li><a href="{{route('heavy-forklift-driving-course')}}">Heavy fork lift & shovel</a></li>
										
										<li><a href="{{route('people-of-determination-driving-course')}}">People of determination</a></li>
										
										<li><a href="{{route('refresher-driving-course')}}">Refresher course</a></li>
										<li><a href="{{route('gcc-driving-course')}}">GCC</a></li>


										
									</ul>
								</li>
								<li class="{{$data['active']=='training-development' ? "active": ""}}"><a href="#">Defensive deriving <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="{{ route('vocational-training-solutions') }}">Vocational Training Solutions</a></li>
										<li><a href="{{ route('industrial-training-programs') }}">Industrial Training Programs</a></li>
										<li><a href="{{ route('engineering-mechanical-works-training') }}">Engineering & Mechanical Works Training</a></li>
										<li><a href="{{ route('skill-learning-development-programs') }}">Skill Learning & Development Programs</a></li>
										<li><a href="{{ route('learners-advanced-driving-programs') }}">Learners & Advanced Driving Programs</a></li>
										
										<li><a href="{{ route('health-safety-consultancy-training') }}">Health & Safety Consultancy & Training</a></li>
										<li><a href="{{ route('safety-security-solutions') }}">Safety & Security Solutions</a></li>
										<li><a href="{{ route('fire-safety-training-solutions') }}">Fire Safety Training & Solutions</a></li>
										<li><a href="{{ route('in-vehicle-monitoring-solution') }}">In-vehicle Monitoring Solution</a></li>
										
									</ul>
								</li>
								<li class="{{$data['active']=='management-system' ? "active": ""}}"><a href="#">Health & Safety  <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="{{ route('quality-management-system') }}">ISO 9001 Quality Management System</a></li>
										<li><a href="{{ route('environmental-management-system') }}">ISO 14001 Environmental Management System</a></li>
										<li><a href="{{ route('occupational-health-safety-management-system') }}">OHSAS 18001 Occupational Health and Safety Management System</a></li>
										<li><a href="{{ route('food-safety-management-system') }}">ISO 22000 Food Safety Management System</a></li>
										<li><a href="{{ route('information-security-management-system') }}">ISO 27000 Information Security Management System</a></li>
										
										
									</ul>
								</li>

								<li><a href="#">Skill development<i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="#">Environmental Monitoring</a></li>
										<li><a href="#">Audit Planning and Management</a></li>
										<li><a href="#">Preparation for DQG/SKEA Awards</a></li>
										<li><a href="#">Business Excellence Training</a></li>
										<li><a href="#">Emergency Preparedness and response planning</a></li>
										<li> <a href="#">Supplier Evaluation and Inspection</a></li>
										
									</ul>
								</li>

								

								
								<li style="display: none;"><a href="#">features<i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="#">Header<i class="icofont icofont-simple-right"></i></a>
											<ul>
												<li><a href="header-1.html">Header One</a></li>
												<li><a href="header-2.html">Header Two</a></li>
												<li><a href="header-3.html">Header Three</a></li>
												<li><a href="header-4.html">Header Four</a></li>
												<li><a href="header-5.html">Header Five</a></li>
												<li><a href="header-6.html">Header Six</a></li>
												<li><a href="header-7.html">Header Seven</a></li>
												<li><a href="header-8.html">Header Eight</a></li>
											</ul>
										</li>
										<li><a href="#">Footer<i class="icofont icofont-simple-right"></i></a>
											<ul>
												<li><a href="footer-1.html">Footer One</a></li>
												<li><a href="footer-2.html">Footer Two</a></li>
												<li><a href="footer-3.html">Footer Three</a></li>
												<li><a href="footer-4.html">Footer Four</a></li>
												<li><a href="footer-5.html">Footer Five</a></li>
											</ul>
										</li>
										<li><a href="#">Slider Style<i class="icofont icofont-simple-right"></i></a>
											<ul>
												<li><a href="hero-slider.html">Nivo Slider</a></li>
												<li><a href="hero-parallax.html">Parallax</a></li>
												<li><a href="hero-slideshow.html">BG Slideshow</a></li>
												<li><a href="hero-kenburne.html">BG Kenburne</a></li>
												<li><a href="hero-video.html">BG Video</a></li>
												<li><a href="hero-text.html">Text Effect</a></li>
											</ul>
										</li>
										<li><a href="#">Page Title<i class="icofont icofont-simple-right"></i></a>
											<ul>
												<li><a href="page-title-default.html">Page Title Default</a></li>
												<li><a href="page-title-parallax.html">Page Title Parallax</a></li>
												<li><a href="page-title-fixed-bg.html">Page Title Fixed BG</a></li>
												<li><a href="page-title-left.html">Page Title Left</a></li>
												<li><a href="page-title-right.html">Page Title Right</a></li>
											</ul>
										</li>
									</ul>
								</li>
								

								<li class="{{$data['active']=='theory-test' ? "active": ""}}"><a href="{{route('theory-test')}}">Theory Test</a></li>
								<li class=""> <a href="#"> Special Offers</a></li>
								<li class=""> <a href="#"> Upcoming events</a></li>

								<li class="{{$data['active']=='contact' ? "active": ""}}"><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="mobile-menu"></div>
				</div>
			</div>
		</div>
	</div>
</div>