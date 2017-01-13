$(document).ready(function() {
	var a=false
	$('.fa-bars')
	.on('click',function() {
		if(a==false){
			$('.phoneMenu').css('display', 'block');
			a=true
		}else{
			$('.phoneMenu').css('display', 'none');
			a=false
		}
	});
});