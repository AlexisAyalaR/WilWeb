

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoUsuario", function(data, status){
    	var x = JSON.parse(data);
    	console.log(x);
    });
});