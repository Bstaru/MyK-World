function Mover(){
	$(".login").addClass('animacionLI');
	$(".yeslogin").addClass('animacionYLI');
	}

$(document).ready(function(){
    $(".botonLI").click(Mover);
});