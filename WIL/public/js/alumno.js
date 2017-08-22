

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoUsuario", function(data, status){
    	console.log("data: "+ data + "\nStatus: " + status);
        alert("Data: " + data + "\nStatus: " + status);
    });
});