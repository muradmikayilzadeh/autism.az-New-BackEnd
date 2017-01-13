<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Autism.az</title>

	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
	<script src="{{url('assets/vendor/js/jquery-3.1.0.js')}}"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<section id="menu" class="col-md-12 col-sm-12 col-xs-12">
			<div class="container text-center">
				<ul class="float-left col-md-5">
					<li class="row">
						<li><a href="index.html">Home</a></li>
						<li><a href="#autism">Services</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#team">Team</a></li>
					</li>
				</ul>

				<div class="logo col-md-2 col-sm-2 col-xs-2 text-center">
					<div class="row">
						<img src="assets/images/logo2.png">
					</div>
				</div>

				<ul class="float-right col-md-5">
					<li class="row">
						<li><a href="#games">Games</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#info">Information</a></li>
						<li><a href="#contact">Contact</a></li>
					</li>
				</ul>
				<i class="fa fa-bars"></i>
			</div>
			<div class="phoneMenu col-md-10 col-md-offset-1">
					<ul class="col-md-12">
						<li><a href="index.html">Home</a></li>
						<li><a href="#autism">Services</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="#games">Games</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#info">Information</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
			</div>
		</section>

		@yield('content')




		<section id="footer" class="col-md-12 col-sm-12 col-xs-12 text-center">
	         <div class="row">
	         	<div class="email col-md-4 text-center">
	         		<h3>SIGN OUR NEWSLETTER</h3>
	         		<p>We will send updates once a week.</p>

	         		<input type="text" class="text" placeholder="Your email here">
	         		<button class="subs"><b>SUBSCRIBE</b></button>
	         	</div>
	         	<div class="sn col-md-4 text-center">
	         		<img src="assets/images/logo2.png" alt="">

	         		<br>

	         		<i class="fa fa-twitter"></i>
	         		<i class="fa fa-facebook"></i>
	         		<i class="fa fa-linkedin"></i>
	         		<i class="fa fa-pinterest"></i>
	         		<i class="fa fa-instagram"></i>
	         	</div>
	         	<div class="oh col-md-4 text-center">
	         		<h3>OPENING HOURS</h3>

	         		<div class="date">
	         			<p class="pull-left">Monday to Friday </p>
	         			<p class="pull-right">7 a.m. to 7 p.m.</p>
	         		</div>

					<br>

	         		<div class="date2">
	         			<p class="pull-left">Weekends / Holidays</p>
	         			<p class="pull-right closed">Closed</p>
	         		</div>
	         	</div>

	         	<span class="copyright">Copyright © 2017 - autism.az</span>
	        </div>
         </section>
	</div>
</div>
</body>
</html>
<script src="{{url('assets/js/slider.js')}}"></script>
<script src="{{url('assets/js/menu.js')}}"></script>
<script>
	$(document).ready(function (){
		$('#menu ul li').click(function() { 
			var target = $(this).find('a').attr('href');
			$('html, body').animate({scrollTop: $(target).offset().top}, 1000);
		});   

	});
</script>