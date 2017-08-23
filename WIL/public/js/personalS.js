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

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/checaUsuario", function(data, status){
        console.log(data);
        var x = data.nivel;
        console.log(x);
        if(x != 2){
            $(location).attr('href',"/WilWeb/Wil/public/html/prueba.html");
        }
    });
});

function openClose() {
    var x = document.getElementById('imput');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}