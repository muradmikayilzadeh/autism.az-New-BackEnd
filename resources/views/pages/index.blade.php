@extends('layouts.index')
@section('content')
	@php
		use App\Istifadeci;
	@endphp
		<section id="slider" class="col-md-12 col-xs-12 col-sm-12">
			<div class="row">	
				<img src="assets/images/content/slider/sun.png" class="slideImg sun">
				<img src="assets/images/content/slider/star.png" class="slideImg star">
				<img src="assets/images/content/slider/flower.png" class="slideImg flower">
				<img src="assets/images/content/slider/bee.png" class="slideImg bee">


				<img src="" class="img img-responsive bg">

				<div class="button prev pull-left"><i class="fa fa-angle-left"></i></div>
				<div class="button next pull-right"><i class="fa fa-angle-right"></i></div>

				<div class="circleset text-center">
					<div class="circle 0"></div>
					<div class="circle 1"></div>
					<div class="circle 2"></div>
					<div class="circle 3"></div>
					<div class="circle 4"></div>
				</div>

				<div class="header-text text-center">
					<h1><b>AUTİSM.AZ</b></h1>

					<p class="text">
						Azərbaycanda ilk autizm sindromu portalı
					</p>

					<div class="contact">Əlaqə</div>
				</div>
			</div>

		</section>

		<section id="autism" class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="container">
					<div class="heading">
						<h2>AUTİZM NƏDİR?</h2>
					</div>

					<div class="col-md-7 text-center">
						<h3><b>AUTİZM BARƏDƏ MƏLUMAT</b></h3>
						<p>
							Autizm-erkən yaş dövründə başlayan, sosial münasibətlər və ünsiyyət sferasında problemlərin olması ilə özünü göstərən ümumi inkişaf problemidir. Autizmin əlamətləri əsasən iki yaşından etibarən özünü göstərməyə başlayır. Autizm-özünə qapanma, real həyatdan uzaqlaşma kimi təzahür edir. Autizm kifayət qədər geniş yayıimış haldır belə ki, təxminən min uşaqdan beş nəfərində müşahidə olunur. Hal-hazırda autizmin yaranmasinin dəqiq səbəbləri məlum deyil. Lakin autizmin nədən yaranmasına fikir bildirən mütəxəssislər belə hesab edirlər ki,autizmin yaranmasi həm irsi, həm də doğuşdan əvvəlki, doğuş zamanı və sonradan qazanılmış bir sıra inkişafa təsiredici faktorlarla, hamiləlik zamanı baş verən narahatlıqlar,eləce də uşaqlıqda edilən peyvəndlərlə əlaqədar ola bilər. Müasir tədqiqatlara əsasən autizmi əsəb sisteminin patologiyası ilə əlaqələndirirlər.</p>
					</div>

					<div class="col-md-5">
						<img src="assets/images/content/autism.png" class="img img-responsive">
					</div>



					<div class="autism2 col-md-4">
						<div class="content text-center">
							<br><br>
							<img src="assets/images/content/s1.jpg" class="img img-circle img-responsive">

							<div class="heading2">
								INFANTS
							</div>

							<p class="text">Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
							<br>
						</div>
					</div>
					<div class="autism2 col-md-4">
						<div class="content text-center">
							<br><br>
							<img src="assets/images/content/s2.jpg" class="img img-circle img-responsive">
							
							<div class="heading2">
								TODDLERS
							</div>

							<p class="text">Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
							<br>
						</div>
					</div>
					<div class="autism2 col-md-4">
						<div class="content text-center">
							<br><br>
							<img src="assets/images/content/s3.jpg" class="img img-circle img-responsive">

							<div class="heading2">
								PRE SCHOOL
							</div>	

							<p class="text">Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
							<br>
						</div>
					</div>

				</div>
			</div>
		</section>



		<section id="visit" class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">	
				<div class="container">
					<div class="col-md-5 col-md-offset-1 text-center">
						<h2>HƏDƏFİMİZ AYDINLIQDIR!</h2>
						<p class="text">autism.az portalı olaraq hədəfimiz autizm sindromlu uşaqların düzgün müalicə tərzini insanlara aşılamaqdır. Portalda olan psixoloqlar müalicənin ən düzgün yolu ilə sizi tanış edəcəklər.</p>
						<button class="contactButton">Əlaqə</button>
					</div>
					

					<div class="cloudSet">
						<div class="cloud" >
							<img src="assets/images/content/cloud.png" class="img img-responsive" style="margin-top:200px;left:20px;height: 50px">
						</div>
						<div class="cloud">
							<img src="assets/images/content/cloud.png" class="img img-responsive" style="left:200px;height: 150px">
						</div>
						<div class="cloud">
							<img src="assets/images/content/cloud.png" class="img img-responsive"  style="margin-top:330px;left:500px;height: 100px">
						</div>
						<div class="cloud">
							<img src="assets/images/content/cloud.png" alt="">
						</div>
					</div>
					<img src="assets/images/content/visit.png" class="img img-responsive">
				</div>
			</div>
		</section>


		<section id="about" class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="container">
					<div class="heading">
						<h2>HAQQIMIZDA</h2>
					</div>

					<div class="col-md-5 text-center">
							<img src="assets/images/content/about1.jpg" class="img img-responsive">
						<div class="circle"></div>
						<div class="circle"></div>
						<div class="circle"></div>
					</div>
					<div class="col-md-7">
						<h3><b>FƏLSƏFƏMİZ</b></h3>
						<p>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus. Placerat a ultricies a, posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.

						Lorem ipsum dolor sit amet, lorem ipsuet lora consectetur adipisicing elit Illo itaque ipsum sit ha Bu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac dolupta orem retibusam qui commolu les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum.</p>
					</div>

					<div class="features col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-4 text-center">
								<i class="fa fa-gamepad"></i>
								<h3>İNTERAKTİV OYUNLAR</h3>
								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fa fa-gamepad"></i>
								<h3>İNTERAKTİV OYUNLAR</h3>
								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fa fa-gamepad"></i>
								<h3>İNTERAKTİV OYUNLAR</h3>
								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fa fa-gamepad"></i>
								<h3>İNTERAKTİV OYUNLAR</h3>
								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fa fa-gamepad"></i>
								<h3>İNTERAKTİV OYUNLAR</h3>
								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fa fa-gamepad"></i>
								<h3>İNTERAKTİV OYUNLAR</h3>
								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.
								</p>
							</div>
						</div>
					</div>

					<div class="parents col-md-12 col-sm-12 col-xs-12 text-center">
						<h3><b>VALİDEYNLƏR NƏ DÜŞÜNÜR?</b></h3>
							<div class="button prev"><i class="fa fa-angle-left"></i></div>
							<div class="button next"><i class="fa fa-angle-right"></i></div>	
						<div class="col-md-6 pull-left">
							<div class="col-md-10 col-md-offset-1">
								<img src="assets/images/content/p1.jpg">

								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ad error, beatae pariatur excepturi! Quos quasi temporibus perspiciatis dolorem vitae laboriosam voluptate. Facilis pariatur dolorem quisquam animi cupiditate, consectetur, eius.
								</p>
								<i class="fa fa-user"></i><span><b> JOHN CASSADY, ASTRONAUT</b></span>
							</div>
						</div>
						<div class="col-md-6 pull-right">
							<div class="col-md-10 col-md-offset-1">
								<img src="assets/images/content/p2.jpg">

								<p class="text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ad error, beatae pariatur excepturi! Quos quasi temporibus perspiciatis dolorem vitae laboriosam voluptate. Facilis pariatur dolorem quisquam animi cupiditate, consectetur, eius.
								</p>
								<i class="fa fa-user"></i><span><b> JOHN CASSADY, ASTRONAUT</b></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="team" class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="container">
					<div class="heading">
						<h2>KOMANDAMIZ</h2>
					</div>
					
					
					<div class="staff">
						<div class="col-md-5">
							<img src="assets/images/content/teammain.jpg" class="img img-responsive">
						</div>
						<div class="col-md-7">
							<h2>Meet our Qualified Staff</h2>
							<p class="text">
								Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus. Placerat a ultricies a, posuere a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
							</p>
						</div>
					</div>

					<div class="team col-md-12 text-center">
						<div class="mate">
							<div class="mateFrame" style="margin-left: 0px">
								<img src="assets/images/content/leyla.jpg" class="img img-responsive">
							</div>
							<div class="heading2 text-center">
								<p>Leyla Abbaszadə</p>
								<span>Developer</span>
							</div>
						</div>
						

						<div class="mate">
							<div class="mateFrame">
								<img src="assets/images/content/murad.jpg" class="img img-responsive">
							</div>
							<div class="heading2 text-center">
								<p>Murad Mikayilzadə</p>
								<span>Developer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="activities" class="col-md-12 col-sm-12 col-xs-12">
			<!-- <div class="container">
				<div class="heading">
					<h2>MƏŞĞULİYYƏTLƏR</h2>
				</div>

				<div class="activityPanel col-md-12">
					<div class="col-md-4">
						<img src="assets/images/content/activity/activity1.jpg" alt="">
					</div>
					<div class="col-md-8">
						<h2>Music Classes</h2>

						<!-- <div class="faq">Activity Description</div>
						<div class="faq">Age Group</div>
						<div class="faq">When?</div> -->
					</div>
				</div>
			</div>
		</section>


		<section id="games" class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="container text-center">
					<div class="row">
						<div class="heading">
						<h2>İNTERAKTİV OYUNLAR</h2>
					</div>

					<div class="img">
						<img src="assets/images/content/games/game1.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game2.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game1.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game2.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game1.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game2.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game1.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game2.jpg" class="img img-responsive">
					</div>

					<div class="img">
						<img src="assets/images/content/games/game1.jpg" class="img img-responsive">
					</div>
					</div>

				</div>
			</div>
		</section>

		<section id="blog" class="col-md-12 col-sm-12 col-xs-12">
			<div class="container">
				<div class="heading">
					<h2>MƏQALƏLƏR</h2>
				</div>

			{{-- <div class="button prev text-center"><i class="fa fa-angle-left"></i></div> --}}
				
				<ul class="blog-panel row text-center col-md-12">
					@foreach($posts as $post)
						<li class="bPanel">
							<div class="bCard col-md-12">
								<div class="row">
									<img src="{{url($post->img)}}" alt="">
									<div class="bText">
										<a href="" style="text-decoration: none"><h3>{{$post->title}}</h3></a>
										<i class="fa fa-clock-o"></i>
										<span>{{$post->created_at }}</span>

										<br>
		
										<i class="fa fa-user"></i>
										<a href="" class="info"><b>
											@php
												$user=Istifadeci::find($post->hekim_id);
												echo '<b>'.$user->name.' '.$user->surname.'</b>';
											@endphp
										</b></a>
											

										<p>{{substr($post->content,0,250)}}</p>
									</div>
									<a href="{{url('showpost',$post->id)}}" class="contact"><b>Ətraflı</b></a>
								</div>
							</div>
						</li>
					@endforeach
			
				</ul>


			</div>
		</section>


		<section id="info" class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="container">
					<div class="infoPanel col-md-5 text-center">
						<h2>Get more Information</h2>
						<p class="text">
							Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit semprem Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et em explicabo tenetur lore apsuet!
						</p>
						<div class="contact"><b>About Us</b></div>
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="container">
					<div class="heading">
						<h2>ƏLAQƏ</h2>
					</div>

					<div class="col-md-5 text-center">
						<h3>INFORMATION</h3>

						<a href="">
							<i class="fa fa-envelope"></i>
							daycare@site.com
						</a>

						<div class="phone">
							<i class="fa fa-phone"></i>
							<span> Call us +1 456 7890</span>
						</div>
								
						<p>
							We are located at Imaginary Fun City, 304.
						</p>

						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6077.283306657302!2d49.86888452201606!3d40.39463407571194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1483036948488"></iframe>
					</div>
					<div class="col-md-7 text-center">
						<h3>WRITE US</h3>

						<form action="">
							<input type="text" class="text" style="margin-top: 0" placeholder="Name">
							<input type="text" class="text" placeholder="Email ID">
							<input type="text" class="text" placeholder="Subject">
							<textarea name="" id="" cols="10" rows="6" placeholder="Enter your message"></textarea>
							<input type="submit" class="send" value="Göndər">
						</form>
					</div>
				</div>
			</div>
		</section>

@stop

         