//crea un arreglo vacio
//var a = [""];

//crea funcion 	que cree el elemnto
function creaElem(){
	//generar id unico
	var id = 0;
	id = generaId();
	//crea el elemento
	var div = document.createElement("div");
	//class
	div.setAttribute("class", "rand")
	//id
	div.setAttribute("id", "r")
	//img
	var img = document.createElement("IMG");
	img.setAttribute("src", "https://cdn3.iconfinder.com/data/icons/back-to-the-future/512/delorean-02-128.png");
	//button
	var bot = document.createElement("BUTTON");
	var t = document.createTextNode("x");
	div.setAttribute("onclick", "elimina(this)");
	//aniades los nodos
	bot.appendChild(t);
	div.appendChild(bot);
	div.appendChild(img);
	//agregar id unico al elemento
	var p = document.createElement("p");
	p.setAttribute("class","p")
	p.setAttribute("id","_"+id);
	div.appendChild(p);
	document.body.appendChild(div);
	document.getElementById("_"+id).innerHTML = id;
	//busca el elemnto creado
	
	//agregas elemento al arreglo
	//a.push(div);
}

//crea funcion que elemina segun elemento
 // (con elemento) o (con id de elemento)
function elimina(x){
	document.body.removeChild(x);
}

function generaId(){
	var id = 0;
	//var x;
	//x = id.parentElement;
	//while(id != 0 || a.indexOf(x)){
		id = Math.floor(Math.random() * 10000);
	//}
	return id;
}