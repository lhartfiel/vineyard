
function clickMenu(){
	$('.responsiveMenu').on('click', function(e){
		e.preventDefault();
		console.log('success!');
		var firstLevel = $('.menu')
		$(firstLevel).show();
	})
};
$('document').ready(){
	clickMenu();
};