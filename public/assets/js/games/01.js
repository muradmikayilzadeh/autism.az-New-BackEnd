$(document).ready(function() {
	$('.start').click(function(event) {
		$('.oyunLogo').fadeOut('400');
		$(this).fadeOut('400')

		$('.basliq').css('transform', 'translateX(35px)');
		$('.shert').css('transform', 'translateY(70px) translateX(-100px)');

		$('.element').fadeIn('400');
	});

	var classes=['xiyarEvvel','xiyarSonra','almaEvvel','almaSonra','tortEvvel','tortSonra','qarpizEvvel','qarpizSonra']

	$('.birinci')
	.click(function(event) {
		var secilmisler=[];
		for(var i=0; i<classes.length;i++){

			if($(this).hasClass(classes[i])){
				secilmisler.push(classes[i])
			}

		}
		$('.birinci').addClass('ikinci')
		$('.birinci').removeClass('birinci')

		console.log('birinci secildi')
		console.log(secilmisler)
		console.log('ikincini sec')


 
	});

	$('.ikinci')
	.click(function(event) {
		for(var i=0;i<classes.length;i++){

			if($(this).hasClass(classes[i])){
				secilmisler.push(classes[i])
			}

		}

		$('.ikinci').addClass('birinci')
		$('.ikinci').removeClass('ikinci')

		console.log(secilmisler)
		console.log('tamamlandi')

	});
});