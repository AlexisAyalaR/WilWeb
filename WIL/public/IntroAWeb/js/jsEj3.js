//crea funcion que cree el elemnto
var a = [];
var num = 0;
function creaElem(){
	//crea el elemento
	var div = document.createElement("div");
	document.body.appendChild(div);
	//class
	div.setAttribute("class", "bloque")
	//buttonElimina
	var bot = document.createElement("BUTTON");
	bot.setAttribute("class", "bot");
	var t = document.createTextNode("x");
	bot.addEventListener("click", function(){ 
			elimina(div, aux, niv);
		});
	//aniades los nodos
	bot.appendChild(t);
	div.appendChild(bot);

	var padre = document.getElementById('padre');
	padre.appendChild(div);


	//nivel
	var niv = document.createElement("select");
	niv.setAttribute("id","niveles");
	niv.setAttribute("class","n");
	niv.setAttribute("id", "Div"+num);

	//niv.setAttribute("onchange", "?");

	div.appendChild(niv);

	var optP = document.createElement("option");
	optP.setAttribute("id","prin");
	var t1 = document.createTextNode("Pincipiante");
	optP.appendChild(t1);
	niv.appendChild(optP);

	var optI = document.createElement("option");
	optP.setAttribute("id","inter");
	var t2 = document.createTextNode("Intermedio");
	optI.appendChild(t2);
	niv.appendChild(optI);

	var optA = document.createElement("option");
	optP.setAttribute("id","avan");
	var t3 = document.createTextNode("Avanzado");
	optA.appendChild(t3);
	niv.appendChild(optA);

	var p = document.createElement("p");
	p.setAttribute("class","p")
	div.appendChild(p);

	var idioma = document.getElementById("bDropdown").value;
	p.innerHTML = idioma;
	var aux = p.innerHTML;
	inserta(aux);

	num++;
}

function inserta(y){
	//insertar al arreglo
	a.push(y);
}

function elimina(div, y, niv){
	for (var k = 0; k < num; k++) {
		if(a[k] == y){
			a[k] = a[num-1];
			a[num-1] = '';
			var num1 = num-1;
			document.getElementById("Div"+num1).id = "Div"+k;
			k = num-1
			num--;
		}
	}

	div.parentNode.removeChild(div); 
}

function dameStr(){
	var res = document.getElementById("res");
	res.innerHTML = '';
	for (var j = 0; j < num; j++) {
		res.innerHTML += "Idioma: "+a[j]+"; Nivel: "+document.getElementById("Div"+j).value;
		res.innerHTML += "<br>";
	}
}
