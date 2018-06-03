@extends('main')
@section('title','Contact Us')
@section('active','active')
@section('content')

<style type="text/css">
	.title{
		margin-top: 10px;
	}
	.course-item:hover{
		transform: none;
	}
</style>
<!-- Page Banner Area
============================================ -->
<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>Contact Us</h1>
				<ul>
					<li><a href="#">home</a></li>
					<li><span> Contact</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Contatc Area
============================================ -->
<div id="contact-area" class="contact-area bg-white">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">Get in touch</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<!-- Contact Info -->
			<div class="contact-info col-md-4 col-sm-5 col-xs-12">
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-phone"></i></div>
					<div class="content fix">
						<h5>call us</h5>
						<p>+ 1 432 789 5647 <br />+ 1 432 789 5673</p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-envelope"></i></div>
					<div class="content fix">
						<h5>your message</h5>
						<p><a href="#">info@example.com</a><a href="#">info@example.com</a></p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-location-pin"></i></div>
					<div class="content fix">
						<h5>our location</h5>
						<p>3756 Melrose place, <br />CA 87031, Australia</p>
					</div>
				</div>
			</div>
			<!-- Contact Form -->
			<div class="contact-form form text-left col-md-8 col-sm-7 col-xs-12">
				<form id="contact-form" action="mail.php" method="post">
					<div class="input-2">
						<div class="input"><input type="text" name="name" placeholder="Name" /></div>
						<div class="input"><input type="email" name="email" placeholder="E-mail" /></div>
					</div>
					<div class="input"><input type="text" name="subject" placeholder="Subject" /></div>
					<div class="input textarea"><textarea name="message" placeholder="Message"></textarea></div>
					<div class="input input-submit"><input type="submit" value="send message" /></div>
				</form>
				<p class="form-messege"></p>
			</div>
		</div>
	</div>
	
</div>



<div id="course-area" class="course-area bg-gray pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">Our Addresses</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<!-- Course Wrapper -->
		<div class="course-wrapper row">
			<div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-car-alt-4"></i>
					<h4>Dubai</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-ambulance-cross"></i>
					<h4>Ajman</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-fast-delivery"></i>
					<h4>Sharjah</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-rocket-alt-2"></i>
					<h4>Ummul Quin</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
		</div>
	</div>
</div>




<div id="course-area" class="course-area bg-white pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">Our Locations</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<!-- Course Wrapper -->
		<div class="course-wrapper row">
			<div id="contact-map"></div>
		</div>
	</div>
</div>



<!-- CTA Area
============================================ -->
<div class="cta-area pb-40 pt-40">
	<div class="container">
		<div class="row">
			<div class="call-to-action text-left col-md-10 col-md-offset-1 col-xs-12">
				<h3>try to get our amazing free lesson</h3>
				<a href="#" class="btn transparent ">get  lesson</a>
			</div>
		</div>
	</div>
</div>

@endsection