$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getUsuarios", function(data, status){
        var x = data.usuarios;
        var y;
        for(i = 0; i<x.length;i++){
            y = document.createElement("option");
            y.innerHTML = x[i].nombre;
            $("#alumnoE").append(y);
        }
    });
});

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/checaUsuario", function(data, status){
        var x = data.nivel;
        if(x != 2){
            $(location).attr('href',"/WilWeb/Wil/public/html/prueba.html");
        }
    });
});

function openClose() {
    var x = document.getElementById('mini');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}