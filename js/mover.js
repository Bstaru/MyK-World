
/*
Animaciones que mueven solo el cuadro de 
Login, SingUp y así
*/
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

function MoverLItoSU(){

	$(".yeslogin").addClass('animacionLItoSU');
	$(".registro").addClass('animacionSU');

	$(".registro").css("z-index", "102");
	$(".yeslogin").addClass('hideLogin');
	
	}

$(document).ready(function(){
    $(".singupback").click(MoverLItoSU);
});


/*Animacion que mueve todo arriba*/

function MoverLand(){
	$(".landing").addClass('animacionLand');
	$("body").addClass('addScroll');
}
$(document).ready(function(){
    $(".cmn-t-scale").click(MoverLand);
});

function MoverIndex(){
	$(".landing").addClass('animacionIndex');
	$("body").addClass('hideScroll');
}
$(document).ready(function(){
    $(".bakin").click(MoverIndex);
});

