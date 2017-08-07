nombres = ["Victor", "Emiliano", "Horacio", "Alexis", "Paul", "Jaime", "Andrés"];
imgs = ["../img/vicky.png", "../img/emi.png", "../img/horacio.png", "../img/alexis.png", "../img/paul.png", "../img/limon.png", "../img/andy.png"];
cv = 
["Cofundador <br> Back-End Master Developer <br> Estudiante de Ingeniería en Computación <br> <br>", 
"Cofundador <br> Front-End Master Developer <br> Estudiante de Ingeniería en Computación <br> <br>",
 "Director de RRPP <br> Senior Programmer <br> Estudiante de Ingeniería en Telecomunicaciones <br>", 
 "Back-End Jr. Developer <br> Estudiante de Ingeniería en Computación <br> Estudiante de Matemáticas Aplicadas <br> <br>", 
 "Front-End Jr. Developer <br> Estudiante de Ingeniería en Computación <br> Estudiante de Ingeniería en Telecomunicaciones <br> <br>", 
 "Front-End Jr. Developer <br> Estudiante de Ingeniería en Computación <br> <br> <br> <br>", 
 "Back-End Jr. Developer <br> Estudiante de Ingeniería en Computación <br> Estudiante de Matemáticas Aplicadas <br> <br> <br>"];
experiencia = 
["Radio ITAM <br> Practicas de verano 2017",
"Radio ITAM <br> Practicas de verano 2017",
"Radio ITAM <br> <br>","Página del WIL <br> <br>",
"Página del WIL <br> <br>","<br> <br>","<br> <br>"];
num = 7;
function creaPerfil(num){
	var div = document.createElement("div");
	div.setAttribute("class","card w3-card-4 w3-white");

	var img = document.createElement("img");
	div.appendChild(img);
	img.setAttribute("class", "section2__img w3-circle");
	var aux = imgs[num];
	img.setAttribute("src", aux);

	var nom = document.createElement("p");
	div.appendChild(nom);
	nom.setAttribute("class", "section2__nom");
	nom.innerHTML = nombres[num];

	var exp = document.createElement("p");
	div.appendChild(exp);
	exp.setAttribute("class", "section2__bio");
	exp.innerHTML = cv[num] + "<br> <br> Proyectos hechos en el WIL: <br>" + experiencia[num];

	var sec = document.getElementById("sec");
	console.log(sec);
	sec.appendChild(div);
}

function generaPerfiles(){
	for (var i = 0; i < num; i++) {
		creaPerfil(i);
	}
}

function openClose() {
    var x = document.getElementById('imput');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}