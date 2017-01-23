$(document).ready(function() {

	$('.start').click(function(event) {
		$('.oyunLogo').fadeOut('400');
		$(this).fadeOut('400')

		$('.basliq').css('transform', 'translateX(35px)');
		$('.shert').css('top', '180px');
		$('.score').fadeIn('400');

		$('.gm,.qm,.sm').fadeIn('400');
	});

	var score=0

	
	$('.element').click(function(event) {

		$('.element').css('transform', 'scale(1)')
		$(this).css('transform', 'scale(1.2)');
	});

	
	// Sual01
	$('.gm').click(function(event) {
		score=score+1
		$('.score').text(score)
		$('.gm,.qm,.sm').hide('400')
		$('.gt,.yt,.bt').show('400')

		$('.shert').text('Hansı yaşıl rəngli təyyarədir?')
	});

	$('.qm').click(function(event) {
		 console.log('yalnis')
	});

	$('.sm').click(function(event) {
		 console.log('yalnis')
	});


	// Sual02
	$('.yt').click(function(event) {
		score=score+1
		$('.score').text(score)
		$('.yt,.bt,.gt').hide('400')
		$('.sa,.ya,.qa').show('400')

		$('.shert').text('Hansı sarı rəngli almadır?')
	});

	$('.bt').click(function(event) {
		 console.log('yalnis')
	});

	$('.gt').click(function(event) {
		 console.log('yalnis')
	});


	// Sual03
	$('.sa').click(function(event) {
		score=score+1
		$('.score').text(score)
		$('.sa,.ya,.qa').hide('400')
		$('.gk,.ck,.qk').show('400')

		$('.shert').text('Hansı çəhrayı rəngli köynəkdir?')
	});

	$('.ya').click(function(event) {
		 console.log('yalnis')
	});

	$('.qa').click(function(event) {
		 console.log('yalnis')
	});


	// Sual04
	$('.ck').click(function(event) {
		score=score+1
		$('.score').text(score)
		$('.ck,.qk,.gk').hide('400')
		$('.cke,.bke,.qke').show('400')

		$('.shert').text('Hansı qırmızı rəngli kəpənəkdir?')
	});

	$('.qk').click(function(event) {
		 console.log('yalnis')
	});

	$('.gk').click(function(event) {
		 console.log('yalnis')
	});


	// Sual05
	$('.qke').click(function(event) {
		score=score+1
		$('.score').text(score)
		$('.cke,.bke,.qke').hide('400')
		$('.qq,.qiq,.gq').show('400')

		$('.shert').text('Hansı qara rəngli qayçıdır?')
	});

	$('.cke').click(function(event) {
		 console.log('yalnis')
	});

	$('.bke').click(function(event) {
		 console.log('yalnis')
	});


	// Sual06
	$('.qq').click(function(event) {
		score=score+1
		$('.score').text(score)
		$('.qq,.qiq,.gq').hide('400')
		$('.qma,.yma,.gma').show('400')

		$('.shert').text('Hansı mavi rəngli masadır?')
	});

	$('.qiq').click(function(event) {
		 console.log('yalnis')
	});

	$('.gq').click(function(event) {
		 console.log('yalnis')
	});



	// Sual07
	$('.gma').click(function(event) {
		score=score+1
		$('.score').text(score)
		$('.qma,.yma,.gma').hide('400')

		$('.aferin').show('500');


	});

	$('.qma').click(function(event) {
		 console.log('yalnis')
	});

	$('.yma').click(function(event) {
		 console.log('yalnis')
	});
	

	
});