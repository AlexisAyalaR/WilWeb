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

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getAlumnos", function(data, status){
        var x = data.alumnos;
        var y;
        for(i = 0; i<x.length;i++){
            y = document.createElement("option");
            y.innerHTML = x[i].nombre;
            $("#alumno").append(y);
        }
    });
});

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getAlumnos", function(data, status){
        var x = data.alumnos;
        var y;
        for (i = 0; i<x.length; i++) {
            y = document.createElement("option");
            y.innerHTML = x[i].nombre;
            $("#miembros").append(y);
        }
    });
});

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getUsuarios", function(data, status){
        var x = data.usuarios;
        var y;
        for (i = 0; i<x.length; i++) {
            y = document.createElement("option");
            y.innerHTML = x[i].nombre;
            $("#miembros1").append(y);
        }
    });
});

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoMiembro", function(data, status){
        var z = data.horario;
        var a = data.nombre;
        var b = data.cargaHorario;
        console.log(b);
        if(b == 1){
            alert("Se modificó el horario correctamente.");
        }else{
            if(b == -1){
                alert("No se modificó el horario correctamente.");
            }
        }
        document.getElementById("nombre").innerHTML = "<b>Nombre: </b>"+  a;
        console.log(data);
        for(i = 0; i<z.length; i++){
            var k = z[i];
            var n = k.horas;
            for(j = 0; j<n.length; j++){
                var l = n.charAt(j);
                if(l == 1){
                    $("."+i+j/2).css("background-color", "blue");
                }
            }
        }
    });
});