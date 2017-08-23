$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getUsuarios", function(data, status){
        console.log(data);
        var x = data.usuarios;
        console.log(x);
        var y;
        for(i = 0; i<x.length;i++){
            y = document.createElement("option");
            y.innerHTML = x[i].nombre;
            $("#alumnoE").append(y);
        }
    });
});