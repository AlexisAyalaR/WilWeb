function cambiaColor(x, y){
    if (x.style.backgroundColor === 'blue') {
        x.style.backgroundColor = 'white';
        x.style.color = 'white';
        x.value = 0;
    } else {
        x.style.backgroundColor = 'blue';
        x.style.color = 'blue';
        x.value = 1;
    }
}

var arrayLu = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var arrayMa = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var arrayMi = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var arrayJu = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var arrayVi = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

function cambiaValue(cb, n, m){
	var cb = document.getElementById(cb);
    a = m - 1;
	if(cb.checked){
        switch(n){
            case 1: arrayLu[a] = 1;
            break;
            case 2: arrayMa[a] = 1;
            break;
            case 3: arrayMi[a] = 1;
            break;
            case 4: arrayJu[a] = 1;
            break;
            case 5: arrayVi[a] = 1;
        }
    }else{
        switch(n){
            case 1: arrayLu[a] = 0;
            break;
            case 2: arrayMa[a] = 0;
            break;
            case 3: arrayMi[a] = 0;
            break;
            case 4: arrayJu[a] = 0;
            break;
            case 5: arrayVi[a] = 0;
        }
    }
}

function envia(){
    var arrayTotal = [arrayLu, arrayMa, arrayMi, arrayJu, arrayVi];
    //alert(arrayTotal);
    return document.getElementById("matriz").value = arrayTotal;
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
    $.get("/WilWeb/Wil/public/checaUsuario", function(data, status){
        var x = data.nivel;
        if(x != 1){
            $(location).attr('href',"/WilWeb/Wil/public/html/prueba.html");
        }
    });
});

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getalumnosYUsuario", function(data, status){
        var x = data.alumnos;
        var y;
        for (i = 0; i<x.length; i++) {
            y = document.createElement("option");
            y.innerHTML = x[i].nombre;
            $("#miembros").append(y);
        }
        x = data.miembros;
        y = document.createElement("option");
        y.innerHTML = x;
        $("#miembros").append(y);
    });
});

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getalumnosYUsuario", function(data, status){
        var x = data.alumnos;
        var y;
        for (i = 0; i<x.length; i++) {
            y = document.createElement("option");
            y.innerHTML = x[i].nombre;
            $("#miembros1").append(y);
        }
        x = data.miembros;
        y = document.createElement("option");
        y.innerHTML = x;
        $("#miembros1").append(y);
    });
});

$(document).ready(function(){
    $.get("/WilWeb/Wil/public/getInfoMiembro", function(data, status){
        var z = data.horario;
        var a = data.nombre;
        var b = data.cargaHorario;
        if(b == 1){
            alert("Se modificó el horario correctamente.");
            location.reload(true);
        }else{
            if(b == -1){
                alert("No se modificó el horario correctamente.");
                location.reload(true);
            }
        }
        document.getElementById("nombre").innerHTML = "<b>Nombre: </b>"+  a;
        for(i = 0; i<z.length; i++){
            var k = z[i];
            var n = k.horas;
            for(j = 0; j<n.length; j++){
                var l = n.charAt(j);
                if(l == 1){
                    $("."+i+j/2).css("background-color", "#2196f3");
                }
            }
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
    $.get("/WilWeb/Wil/public/getInfoMiembro", function(data, status){
        var x = data.nombresDropdown;
        var y;
        var z;
        var z1;
        for (i = 0; i < x.length; i++){
            y = x[i];
            z1 = document.createElement("th");
            z = document.createElement("tr");
            z1.append(y);
            z.append(z1);
            $("#busca").append(z);
        }
    });
});