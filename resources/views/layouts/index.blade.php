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
		@if(!isset($_SESSION['user']))

			<div class="login">
				<i class="fa fa-sign-in"></i>
			</div>

			<div class="register">
				<i class="fa fa-plus"></i>
			</div>
			
		@endif

		@if(isset($_SESSION['user']))
			<a href="{{url('/myprofile')}}" class="profile">
				<i class="fa fa-user"></i>
			</a>

			<a href="{{url('/logout')}}" class="logout">
				<i class="fa fa-sign-out"></i>
			</a>
		@endif

				<div class="panel loginPanel col-md-3">
					<p class="fa fa-close pull-right"></p>
					<img src="assets/images/logo2.png" class="img img-responsive">
			
					<form action="{{url('/login')}}" method="post">
						{{ csrf_field() }}
						<input name="email" type="text" class="text" placeholder="E-poçt ünvanınız">
						<input name="password" type="password" class="text" placeholder="Şifrəniz">

						<input type="submit" value="Daxil ol" class="submit">
					</form>
				</div>


				<div class="panel registerPanel col-md-3">
					<p class="fa fa-close pull-right"></p>
					<img src="assets/images/logo2.png" class="img img-responsive">
			
					<form action="{{url('/register')}}" method="post">
						{{ csrf_field() }}
						<input name="name" type="text" class="text" placeholder="Adınız">
						<input name="surname" type="text" class="text" placeholder="Soyadınız">
						<input name="email" type="text" class="text" placeholder="E-poçt ünvanınız">
						<input name="password" type="password" class="text" placeholder="Şifrəniz">

						<textarea name="about" class="text" placeholder="Haqqınızda"></textarea>

						<select name="gender" class="text">
							<option value="0">Kişi</option>
							<option value="1">Qadın</option>
						</select>
						
						<input type="submit" value="Qeydiyyatdan keç" class="submit">
					</form>
				</div>

		<div class="pageMsg col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<marquee behavior="" direction="">
					
					@if ($message = Session::get('success'))
		                 <b>{{ $message }}</b>
		            @endif

		            @if ($message = Session::get('unsuccess'))
		                 <b>{{ $message }}</b>
		            @endif

		             @if ($message = Session::get('true'))
		                 <b>{{ $message }}</b>
		            @endif

		             @if ($message = Session::get('false'))
		                 <b>{{ $message }}</b>
		            @endif

		            @if ($message = Session::get('changed'))
		                 <b>{{ $message }}</b>
		            @endif

		            @if ($message = Session::get('banned'))
		                 <b>{{ $message }}</b>
		            @endif

		            @if ($message = Session::get('login'))
		                 <b>{{ $message }}</b>
		            @endif
		            
				</marquee>
			</div>
		</div>
		<section id="menu" class="col-md-12 col-sm-12 col-xs-12">
			<div class="container text-center">
				<ul class="float-left col-md-5">
					<li class="row">
						<li><a href="{{url('/#autism')}}">Autizm?</a></li>
						<li><a href="{{url('/#about')}}">Haqqımızda</a></li>
						<li><a href="{{url('/#team')}}">Komandamız</a></li>
					</li>
				</ul>

				<div class="logo col-md-2 col-sm-2 col-xs-2 text-center">
					<div class="row">
						<a href="{{url('/')}}">
							<img src="{{url('assets/images/logo2.png')}}">
						</a>
					</div>
				</div>

				<ul class="float-right col-md-5">
					<li class="row">
						<li><a href="{{url('/#games')}}">Oyunlar</a></li>
						<li><a href="{{url('/#blog')}}">Məqalələr</a></li>
						<li><a href="{{url('/#contact')}}">Əlaqə</a></li>
					</li>
				</ul>
				<i class="fa fa-bars"></i>
			</div>
			<div class="phoneMenu col-md-10 col-md-offset-1">
					<ul class="col-md-12">
						<li><a href="{{url('/#autism')}}">Autizm?</a></li>
						<li><a href="{{url('/#about')}}">Haqqımızda</a></li>
						<li><a href="{{url('/#team')}}">Komandamız</a></li>
						<li><a href="{{url('/#games')}}">Oyunlar</a></li>
						<li><a href="{{url('/#blog')}}">Məqalələr</a></li>
						<li><a href="{{url('/#contact')}}">Əlaqə</a></li>
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
	         		<img src="{{url('assets/images/logo2.png')}}" alt="">

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
			var target1 = $(this).find('a').attr('href');
			var maintarget=target1.split('#');

			$('html, body').animate({scrollTop: $("#"+maintarget[1]).offset().top}, 1000);
		});   

	});
</script>


<script>
	$('.login')
	.on('click',function(event) {
		$('.loginPanel').css('display', 'block');
	});


	$('.register')
	.on('click',function(event) {
		$('.registerPanel').css('display', 'block');
	});

	$('.fa-close')
	.on('click',function(event) {
		$('.loginPanel').css('display', 'none');
		$('.registerPanel').css('display', 'none');
	});
</script>