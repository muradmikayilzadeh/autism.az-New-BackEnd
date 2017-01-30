@extends('layouts.index')
	<link rel="stylesheet" href="{{url('assets/css/bloghome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/blogpost.css')}}">
	<style>
		#footer{
			margin-top: 50px;
		}
	</style>

	@php
	use App\Istifadeci;
	use App\Comment;
	use App\Tag;
	@endphp
@section('content')	

		<section id="banner" class="col-md-12 col-xs-12 col-sm-12">
			<div class="container">
				<h1>BLOG POST</h1>
				<div class="pages">
					<a href="">Home</a>
					<span> / </span>
					<a href="">Blog Home</a>
					<span> / </span>
					<p>Blog Post</p>
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

					<div class="col-md-12">
						<div class="blog">
							<h2>{{$post->title}}</h2>
							<i class="fa fa-clock-o"></i>
							<p>{{$post->created_at}} tarixində paylaşıldı</p>

							<i class="fa fa-user"></i>
							<a href="{{url('profile',$post->hekim_id)}}" class="info">
								@php
									$user=Istifadeci::find($post->hekim_id);
									echo '<b>'.$user->name.' '.$user->surname.'</b>';
								@endphp
							</a>
											
							<i class="fa fa-comment"></i>
							<a href="" class="info"><b>{{count($comments)}} şərh</b></a>

							<img src="../{{$post->img}}" alt="">


							<p class="text">
								{{$post->content}}
							</p>


							<i class="fa fa-tags"></i>
							<p>Mövzu:</p>

							<p class="tag">
								@php
									$tag=Tag::find($post->tag);
									echo $tag->name;
								@endphp
							</p>
							
							<br>
							<a href="{{url('likepost',$post->id)}}" class="fa fa-thumbs-up like" style="font-size: 20px;cursor:pointer"></a>
							<span>{{count($likes)}} nəfər bunu bəyəndi</span>
						</div>


						<div class="leaveComment">
							<h3>Şərh Yaz:</h3>

								<form action="{{url('/leavecomment',$post->id)}}" method="post">
									{{csrf_field()}}
									<input type="text" name="content" placeholder="Şərhinizi yazın">
								
									<input type="submit" value="Paylaş" class="contact pull-right">
								</form>
						</div>


						<div class="comments">
							<h2>ŞƏRHLƏR</h2>
							<hr>

							@foreach($comments as $comment)
								@if($comment->replied_id==0)
						
									<div class="commentBox col-md-12">
										@if($comment->user_id==$_SESSION['user'])
											<a href="{{url('deletecomment',$comment->id)}}" class="fa fa-close pull-right"></a>
										@endif
										@php
											$user=Istifadeci::find($comment->user_id);
										@endphp
										<div class="col-md-2">
											<img src="../{{$user->avatar}}" alt="">
										</div>
										
										<div class="col-md-10">
											<h3>{{$user->name.' '.$user->surname}}</h3>
											<p class="time">{{$comment->created_at}}</p>
											<p class="text">
												{{$comment->content}}
											</p>
											
											<div class="col-md-12">
												<div style="margin-bottom: 30px" class="reply text-center pull-right">Cavabla</div>
												
												<form action="{{url('replycomment'.'/'.$post->id,$comment->id)}}" method="post">
													{{csrf_field()}}
													<input type="text" class="replyForm" name="content">
												</form>
												<script>
													$('.reply')
													.on('click',function(event) {
														$('.replyForm').css('display', 'block');
													});
												</script>
											</div>

											@php
												$replieds=Comment::where('replied_id',$comment->id)->get();
											@endphp

											@foreach($replieds as $replied)
												<div class="nestedComment col-md-10 col-md-offset-2 commentBox">
												@if($replied->user_id==$_SESSION['user'])
													<a href="{{url('deletecomment',$replied->id)}}" class="fa fa-close pull-right"></a>
												@endif
													@php
														$repliedUser=Istifadeci::find($replied->user_id);
													@endphp
													<div class="col-md-2">
														<img src="../{{$repliedUser->avatar}}" alt="">
													</div>
													
													<div class="col-md-10" style="padding-left: 40px">
														<h3>{{$repliedUser->name.' '.$repliedUser->surname}}</h3>
														<p class="time">{{$replied->created_at}}</p>
														<p class="text">
															{{$replied->content}}
														</p>
													</div>
												</div>
											@endforeach

										</div>

										
									</div>

								@endif
							@endforeach

						</div>
					</div>
					
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





					<div class="image">
						<h2>IMAGE</h2>
						<img src="{{url('assets/images/content/bloghome/blogs/imgwidget.jpg')}}" alt="">
					</div>


					<div class="tags">
						<h2>ETİKETLƏR</h2>
						@foreach($tags as $tag)
							<p class="tag">{{$tag->name}}</p>
						@endforeach
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
		<script src="{{url('assets/js/slider.js')}}"></script>
		<script src="{{url('assets/js/menu.js')}}"></script>
		<script src="{{url('assets/js/accordion.js')}}"></script>
		@stop