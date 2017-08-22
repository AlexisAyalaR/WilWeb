var lunes = [];
var martes = [];
var miercoles = [];
var jueves = [];
var viernes = [];
function cambiaColor(x){
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
