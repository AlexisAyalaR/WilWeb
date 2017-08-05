nombres = ["Victor", "Emiliano", "Horacio", "Alexis", "Paul", "Jaime", "Andrés"];
imgs = ["vicky.jpg", "emi.jpg", "horacio.jpg", "alexis.jpg", "paul.jpg", "limon.jpg", "andy.jpg"];
experiencia = [""];
num = 7;
function creaPerfil(num){
	var divv = document.createElement("div");
	div.setAttribute("class","w3-card");

	var img = document.createElement("img");
	div.appendChild(img);
	img.setAttribute("class", "section2__img");
	var aux = imgs[num];
	img.setAttribute("src", aux);

	var nom = document.createElement("p");
	div.appendChild(nom);
	nom.setAttribute("class", "section2__nom");
	nom.innerHTML = nombres[num];

	var exp = document.createElement("p");
	div.appendChild(bio);
	exp.setAttribute("class", "section2__bio");
	exp.innerHTML = experiencia[num];

	var sec = document.getElementById("section2__div");
	sec.appendChild(div);
}

function generaPerfiles(){
	for (var i = 0; i < num; i++) {
		generaPerso(i);
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