

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoUsuario", function(data, status){
    	console.log(data);

    	console.log(data.miembro)
    });
});