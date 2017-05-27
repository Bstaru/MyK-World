
$(document).ready(function(){

 var panel1 = $(" .landPanel-1");
  var panel2 = $(" .landPanel-2");
  var panel3 = $(" .landPanel-3");
  var panel4 = $(" .landPanel-4");

  var panels =$(".Landpage-item");

  var currPanel;
  var recarga = false;


  $(".Landpage-item").hide();
  $(".btn-index").hide();

  	$(".btnAbout").click(function() {
		panel1.show();	
		currPanel=panel1;
	});

	$(".btn-nextPanel").click(function() {
		/*this.stop().animate({scrollTop:0}, '500', 'swing', function() { 
							});*/
		currPanel=$(this).parent();
			/*currPanel.hide();*/
			if(currPanel.hasClass("landPanel-4")){
				$(".btn-index").hide();						
				panel1.show();					
				currPanel.slideUp( "slow", function() {					 
		     });
			}
			else{
	            currPanel.next().show();
				currPanel.slideUp( "slow", function() {
					$(".btn-index").show();
				  });
				}
	});

	$(".list-modal-btn").click(function() {
	  	 var idDrama = $( this ).attr( "Drama" );
	  	 $("#idDramaModal").val(idDrama);
	});


	var imageLoader = document.getElementById('filePhoto');
	if(imageLoader != null){
		 	imageLoader.addEventListener('change', handleImage, false);
				function handleImage(e) {
			    var reader = new FileReader();
			    reader.onload = function (event) {
			        
			        $('.uploader img').attr('src',event.target.result);
			    }
			    reader.readAsDataURL(e.target.files[0]);
		 	} 
	 }

	/*$('.container-fluid').scroll(function(){

		console.log('OAAA');

		var height = $(this).height();
		var scrollHeight = $(this)[0].scrollHeight;
		var st = $(this).scrollTop();

		if ((st + height >= scrollHeight) && !recarga) {

			recarga = true;

			var number = $('.container-fluid').lenght;

			console.log('JOJ');

			//$.ajax({})
		}
	 });*/

	 $(window).scroll(function(){

	 	if($(window).scrollTop() + $(window).height() >= $(document).innerHeight() -5) {

	 		if(!recarga)
	 		{
	 			recarga = true;
	 			var number = $(".wea").length;

		 		$.ajax({
		 			type:"GET",
		 			url:"/recharge_list",
		 			contentType:"aplication/json",
		 			dataType: "json",
		 			data: '_token =<?php echo csrf_token()?>',

		 			success: function(data){

		 				for(var i = number; i < data.length; i++)
		 				{
		 					console.log(data[i]);
		 					var htmltoAppend = appendList(data[i].idDrama, data[i].dramaName, data[i].numberOfEpisodes);
		 					$(".list-group").append(htmltoAppend);
		 				}

		 				recarga = false;
		 			}
		 		});
	 		}

	 	}
	 });




});



function appendList (idDrama, dramaName,numberOfEpisodes,episodesWatched){
	 var htmltoAppend =
	 "<a href='/drama/" + idDrama + "'>"+
	  "<li class='list-group-item wea' wea = '" + idDrama + "'>   "+
   "<div class='imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12'>"+
    "<img src='../assets/images/icons/planet.png' class='img-responsive'>"+
     "</div>"+
      "<div class='nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12'>"+
       "<a href='#'>" + dramaName + "</a>"+
    "</div>"+
    "<div class='moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12'>"+
    "<form name='formulario'>"+
    "<input type='text' name='Eps' value='"+ episodesWatched+"' class='Eps'> of <span>"+numberOfEpisodes+"  </span>  "+
    "<a href='#' name='masEps' onClick='add('" + idDrama + "');' class='btn btn-default'>+</a>"+
    "<a href='#' class='btn btn-default list-modal-btn' data-toggle='modal'  data-target='#myModal'" + 
	" Drama="+ idDrama +" >"+
    " Edit</a>"+
    "</form>  </div>"+
    " <input type='hidden' name='idSelectedDrama' value='" + idDrama+"'>"+
    "<button type='button' name='OkEdit' class='btn btnMdlClose btnDeleteDrama OkEdit'  onclick='wea(" + idDrama +");'> Delete </button>"+    "</li>"+
    "</a>";
    return htmltoAppend;

}
 

 function wea(idDrama)
 {
 	$.ajax({
		type:"GET",
		url:"/delete_from_list/" + idDrama,
		contentType:"aplication/json",
		dataType: "json",
		data: '_token =<?php echo csrf_token()?>'
	});

	$(".list-group-item").each(function () {
		if($(this).attr("wea") == idDrama)
		{
			$(this).remove();
		}
		
	});
 }

 function add(idDrama)
 {
 	$.ajax({
		type:"GET",
		url:"/add_list/" + idDrama,
		contentType:"aplication/json",
		dataType: "json",
		data: '_token =<?php echo csrf_token()?>'
	});

	$(".Eps").val($(".Eps").val() + 1);
 }
	            
	             
	            
	            
	              
	            
	                
	                             
	                  
	                  
	                 
	                
	                
	           
	            
	        	 		
	        	 		
	        	 		
	        	       		        
