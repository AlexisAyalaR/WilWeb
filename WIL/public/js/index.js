nombres = ["Victor", "Emiliano", "Horacio", "Alexis", "Paul", "Jaime", "Andrés"];
imgs = ["../img/vicky.png", "../img/emi.png", "../img/horacio.png", "../img/alexis.png", "../img/paul.png", "../img/limon.png", "../img/andy.png"];
experiencia = ["","","","","","",""];
num = 7;
function creaPerfil(num){
	var div = document.createElement("div");
	div.setAttribute("class","card w3-card-4");

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
	exp.innerHTML = experiencia[num];

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