
$(document).on('ready',function (){
	var Actual=1;

	$("#prueba4").hide();
	$("#prueba3").hide();
	$("#prueba2").hide();
	$("#prueba1").show();

	$("#siguiente").click(function(){
		if (Actual == 1) {
			$("#prueba4").hide();
			$("#prueba3").hide();
			$("#prueba1").hide();
			$("#prueba2").show();
			Actual++;
		}
		else if (Actual==2) {
			$("#prueba4").hide();
			$("#prueba2").hide();
			$("#prueba1").hide();
			$("#prueba3").show();
			Actual++;
		}
		else if (Actual==3) {
			$("#prueba3").hide();
			$("#prueba1").hide();
			$("#prueba2").hide();
			$("#prueba4").show();
			Actual++;
		}
	})
	$("#atras").click(function(){
		if (Actual==2) {
			$("#prueba4").hide();
			$("#prueba3").hide();
			$("#prueba2").hide();
			$("#prueba1").show();
			Actual--;	
		}
		else if (Actual==3) {
			$("#prueba4").hide();
			$("#prueba1").hide();
			$("#prueba3").hide();
			$("#prueba2").show();
			Actual--;
		}
		else if (Actual==4) {
			$("#prueba4").hide();
			$("#prueba1").hide();
			$("#prueba2").hide();
			$("#prueba3").show();
			Actual--;
		}
		
	})

});