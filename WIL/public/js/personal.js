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
    var i = cb % 6;
	var cb = document.getElementById(cb);
	if(cb.checked){
        switch(n){
            case 1: arrayLu[m] = 1;
            break;
            case 2: arrayMa[m] = 1;
            break;
            case 3: arrayMi[m] = 1;
            break;
            case 4: arrayJu[m] = 1;
            break;
            case 5: arrayVi[m] = 1;
        }
    }else{
        switch(n){
            case 1: arrayLu[m] = 0;
            break;
            case 2: arrayMa[m] = 0;
            break;
            case 3: arrayMi[m] = 0;
            break;
            case 4: arrayJu[m] = 0;
            break;
            case 5: arrayVi[m] = 0;
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

