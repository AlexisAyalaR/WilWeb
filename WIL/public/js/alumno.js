

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoUsuario", function(data, status){
    	console.log(data);
    	var x = JSON.parse(data);
    	//console.log(x);
    });
});