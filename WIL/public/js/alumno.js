var r = new XMLHttpRequest();

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoUsuario", function(data, status){
    	document.getElementById("sectio1").innerHTML = "hola";
    	console.log("data: "+ data + "\nStatus: " + status);
        alert("Data: " + data + "\nStatus: " + status);
    });
});