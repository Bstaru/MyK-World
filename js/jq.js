



$(document).ready(function(){



 var panel1 = $(" .landPanel-1");
  var panel2 = $(" .landPanel-2");
  var panel3 = $(" .landPanel-3");
  var panel4 = $(" .landPanel-4");

  var panels =$(".Landpage-item");


  $(".Landpage-item").hide();
  $(".btn-index").hide();

   panel1.show();

	$(".btn-nextPanel").click(function() {
		/*this.stop().animate({scrollTop:0}, '500', 'swing', function() { 
							});*/
		var currPanel=$(this).parent();
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
});