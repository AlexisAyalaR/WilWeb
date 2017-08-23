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
        console.log(data);
        var x = data.alumnos;
        console.log(x);
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
        console.log(data);
        var x = data.nivel;
        console.log(x);
        if(x != 1){
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