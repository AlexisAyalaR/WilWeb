

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoUsuario", function(data, status){
    	var x = 0;
    	var y = data.miembro.progreso;
    	console.log(y);
 		switch(y) {
		    case 1:
		        x = 16.5;
		        break;
		    case 2:
		        x = 33;
		        break;
		    case 3:
		    	x = 50;
		    	break;
		    case 4:
		    	x = 66;
		    	break;
		    case 5:
		    	x = 82.5;
		    	break;
		    case 6:
		    	x = 100;
		    	break;
		    default:
		        x = 0;
		}
    	$(".barraP").css("width" ,data.miembro.progreso+"%");
    });
});