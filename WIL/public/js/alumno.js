

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoUsuario", function(data, status){
    	console.log(data);
    	var x = 0;
    	var y = data.miembro.progreso;
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
    	$(".barraP").css("width" ,x+"%");
    	var z = data.horario;
    	for(i = 0; i<5; i++){
    		var k = z[i];
    		var n = k.horas;
    		console.log(n);
    		for(j = 0; i<26; i++){
    			var l = n.charAt(j);
    			console.log(j);
    			if(n == 1){
    				$("."+i+j).css("background-color", "blue");
    			}
    		}
    	}
    });
});