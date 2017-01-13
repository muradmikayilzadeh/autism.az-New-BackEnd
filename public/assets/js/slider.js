$(document).ready(function() {
	//Sliderin ilk veziyyeti
	$(".0").css({
			border: '3px solid white',
			background: 'black'
		});
	$('.sun').css('display', 'block');
	$('.flower').css('display', 'block');
	$('.bee').css('display', 'none');
	$('.star').css('display', 'none');
	// Aktiv slider
	$('#slider')
	.on('mousemove',function(event) {
		var x=event.pageX
		var y=event.pageY;

		if(x++){
			$('.sun').css('marginLeft', -x/20+'px')
			$('.flower').css('marginLeft', -x/20+'px')
			$('.bee').css('marginLeft', -x/20+'px')
			$('.star').css('marginLeft', -x/20+'px')
			$('.header-text').css('marginLeft', -x/40+'px')
		}
		if(y++){
			$('.sun').css('marginTop', -y/20+'px')
			$('.flower').css('marginTop', -y/20+'px')
			$('.bee').css('marginTop', -y/20+'px')
			$('.star').css('marginTop', -y/20+'px')
			$('.header-text').css('marginTop', -y/40+'px')
		}
	});
	// Slider backgroundlarinin menbeleri
	var sources=[
	'assets/images/content/slider/slide1.jpg',
	'assets/images/content/slider/slide2.jpg',
	'assets/images/content/slider/slide3.jpg',
	'assets/images/content/slider/slide4.jpg',
	'assets/images/content/slider/slide5.jpg'
	]	
	var count=0
	$('.bg').attr('src', sources[count])
	$('.next').click(function(event) {
		if(count==sources.length-1){
			$('.bg').fadeOut('fast')
			$('.bg').attr('src', sources[0])
			$('.bg').fadeIn('fast')
			count=0

			$('.circle').css('background', 'white');
			$("."+count+"").css({
				border: '3px solid white',
				background: 'black'
			});

		}else{
			$('.bg').fadeOut('fast')
			$('.bg').attr('src', sources[count+1])
			$('.bg').fadeIn('fast')
			count=count+1

			$('.circle').css('background', 'white');
			$("."+count+"").css({
				border: '3px solid white',
				background: 'black'
			});

		}

		//Nomrelere gore sekillerin mueyyen edilmesi
		if(count==0){
			$('.sun').css('display', 'block');
			$('.flower').css('display', 'block');
			$('.bee').css('display', 'none');
			$('.star').css('display', 'none');
		}


		if(count==1){
			$('.sun').css('display', 'none');
			$('.flower').css('display', 'none');
			$('.bee').css('display', 'block');
			$('.star').css('display', 'block');
		}

		if(count==2){
			$('.sun').css('display', 'block');
			$('.flower').css('display', 'block');
			$('.bee').css('display', 'none');
			$('.star').css('display', 'none');
		}

		if(count==3 || count==4){
			$('.sun').css('display', 'none');
			$('.flower').css('display', 'none');
			$('.bee').css('display', 'block');
			$('.star').css('display', 'block');
		}
	});

	$('.prev').click(function(event) {
		if(count==0){
			
			$('.bg').fadeOut('fast')
			$('.bg').attr('src', sources[sources.length-1])
			$('.bg').fadeIn('fast')
			count=sources.length-1

			$('.circle').css('background', 'white');
			$("."+count+"").css({
				border: '3px solid white',
				background: 'black'
			});

		}else{
			
			$('.bg').fadeOut('fast')
			$('.bg').attr('src', sources[count-1])
			$('.bg').fadeIn('fast')
			count=count-1

			$('.circle').css('background', 'white');
			$("."+count+"").css({
				border: '3px solid white',
				background: 'black'
			});

		}

		//Nomrelere gore sekillerin mueyyen edilmesi
		if(count==0){
			$('.sun').css('display', 'block');
			$('.flower').css('display', 'block');
			$('.bee').css('display', 'none');
			$('.star').css('display', 'none');
		}


		if(count==1){
			$('.sun').css('display', 'none');
			$('.flower').css('display', 'none');
			$('.bee').css('display', 'block');
			$('.star').css('display', 'block');
		}

		if(count==2){
			$('.sun').css('display', 'block');
			$('.flower').css('display', 'block');
			$('.bee').css('display', 'none');
			$('.star').css('display', 'none');
		}

		if(count==3 || count==4){
			$('.sun').css('display', 'none');
			$('.flower').css('display', 'none');
			$('.bee').css('display', 'block');
			$('.star').css('display', 'block');
		}
	});

});