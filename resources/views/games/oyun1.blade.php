@extends('layouts.index')
		<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{url('assets/css/bloghome.css')}}">
		<link rel="stylesheet" href="{{url('assets/css/games/oyun1/oyun1.css')}}">
		<style>
			#footer{
				margin-top: 50px;
			}
		</style>

@section('content')
		<section id="banner" class="col-md-12 col-xs-12 col-sm-12">
			<div class="container">
				<h1>OYUN</h1>
				<div class="pages">
					<a href="">Ana səhifə</a>
					<span> / </span>
					<p>Oyunlar</p>
				</div>
			</div>
			<div class="row">
					<svg id="deco" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
			            <path d="M-5 100 Q 0 20 5 100 Z
			               M0 100 Q 5 0 10 100
			               M5 100 Q 10 30 15 100
			               M10 100 Q 15 10 20 100
			               M15 100 Q 20 30 25 100
			               M20 100 Q 25 -10 30 100
			               M25 100 Q 30 10 35 100
			               M30 100 Q 35 30 40 100
			               M35 100 Q 40 10 45 100
			               M40 100 Q 45 50 50 100
			               M45 100 Q 50 20 55 100
			               M50 100 Q 55 40 60 100
			               M55 100 Q 60 60 65 100
			               M60 100 Q 65 50 70 100
			               M65 100 Q 70 20 75 100
			               M70 100 Q 75 45 80 100
			               M75 100 Q 80 30 85 100
			               M80 100 Q 85 20 90 100
			               M85 100 Q 90 50 95 100
			               M90 100 Q 95 25 100 100
			               M95 100 Q 100 15 105 100 Z">
			            </path>
			         </svg>
				</div>
		</section>

		<section id="blogs" class="col-md-12 col-sm-12 col-xs-12">
			<div class="container">
				<div class="col-md-9">
					<h2>Oyun 01</h2>

					<section id="game" class="text-center"> 

						{{-- Start of Game --}}
						<img src="{{url('assets/images/logo2.png')}}" class="oyunLogo">
						<br><br>
						<button class="start">Başla</button>

						{{-- Starta kliklemeden sonra --}}
						<h1 class="basliq">ƏVVƏLİ VƏ SONRASI</h1>
						<p class="shert">Dostum, əvvəli və sonrası verilmiş şəkilləri qruplaşdır!</p>

						<img src="{{url('assets/images/games/oyun01/cucumberBefore.png')}}" class="element xiyarEvvel birinci">
						<img src="{{url('assets/images/games/oyun01/cucumberAfter.png')}}" class="element xiyarSonra birinci">
						<img src="{{url('assets/images/games/oyun01/appleAfter.png')}}" class="element almaSonra">
						<img src="{{url('assets/images/games/oyun01/appleBefore.png')}}" class="element almaEvvel birinci">
						<img src="{{url('assets/images/games/oyun01/watermelonBefore.png')}}" class="element qarpizEvvel birinci">
						<img src="{{url('assets/images/games/oyun01/watermelonAfter.png')}}" class="element qarpizSonra birinci">
						<img src="{{url('assets/images/games/oyun01/cakeBefore.png')}}" class="element tortEvvel birinci">
						<img src="{{url('assets/images/games/oyun01/cakeAfter.png')}}" class="element tortSonra birinci">
						


					</section>


				</div>
				<div class="col-md-3">
					<div class="about">
						<h2>About us</h2>
						<p class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.
						</p>

						<i class="fa fa-twitter"></i>
		         		<i class="fa fa-facebook"></i>
		         		<i class="fa fa-linkedin"></i>
		         		<i class="fa fa-pinterest"></i>
		         		<i class="fa fa-instagram"></i>
					</div>


					<div class="search">
						<h2>Search</h2>
						<input type="text" class="textInput">
	         			<button class="subs"><b><i class="fa fa-search"></i></b></button>
					</div>


					<div class="categories">
						<h2>CATEGORIES</h2>
						<ul>
							<div class="row">
								<li>Parent's Book</li>
								<li>Events and News</li>
								<li>Teachers</li>
								<li>Updates</li>
							</div>
						</ul>
					</div>


					<div class="widget">
						<h2>TEXT WIDGET</h2>

						<p class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.
						</p>
					</div>


					<div class="image">
						<h2>IMAGE</h2>
						<img src="assets/images/content/bloghome/blogs/imgwidget.jpg" alt="">
					</div>


					<div class="tags">
						<h2>TAGS</h2>
						<p class="tag">Daycare</p>
						<p class="tag">Concert</p>
						<p class="tag">Father's day</p>
						<p class="tag">Fun</p>
						<p class="tag">Activity</p>
						<p class="tag">Toys</p>
						<p class="tag">Offer</p>
					</div>


					<div class="accordion">
						<h2>ACCORDION</h2>
						
						<div class="accordionItem">Acivities</div>
						<div class="panel">
							<p class="text">
								Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit.
							</p>
						</div>


						<div class="accordionItem">Age Group</div>
						<div class="panel">
							<p class="text">
								Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit.
							</p>
						</div>


						<div class="accordionItem">Timetable</div>
						<div class="panel">
							<p class="text">
								Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="pagination col-md-12 col-sm-12 col-xs-12">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>5</span>
		</div>
		
		<script>
			$(document).ready(function() {
				$('.effect')
				.on('mouseover', function(event) {
					$(this).find('img').css({
						opacity: '.7',
						transform: 'scale(1.2)'
					});;
				});



				$('.effect')
				.on('mouseleave', function(event) {
					$(this).find('img').css({
						opacity: '1',
						transform: 'scale(1)'
					});;
				});
			});
		</script>

		<script src="{{url('assets/js/slider.js')}}"></script>
		<script src="{{url('assets/js/menu.js')}}"></script>
		<script src="{{url('assets/js/accordion.js')}}"></script>

		<script src="{{url('assets/js/games/01.js')}}"></script>
@stop