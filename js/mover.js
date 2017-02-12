function MoverLI(){
	$(".login").addClass('animacionLI');
	$(".yeslogin").addClass('animacionYLI');
	}

$(document).ready(function(){
    $(".botonLI").click(MoverLI);
});


function MoverSU(){
	$(".login").addClass('animacionLI');
	$(".registro").addClass('animacionSU');
	}

$(document).ready(function(){
    $(".botonSU").click(MoverSU);
});


function MoverSUtoLI(){
	$(".registro").addClass('animacionSUtoLI');
	$(".yeslogin").addClass('animacionYLI');

	$(".yeslogin").css("z-index", "102");
	$(".registro").addClass('hideLogin');
	$(".login").addClass('hideLogin');
	}

$(document).ready(function(){
    $(".loginback").click(MoverSUtoLI);
});