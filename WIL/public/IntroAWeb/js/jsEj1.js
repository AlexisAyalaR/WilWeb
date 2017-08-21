function damePiram(){
	var y = '';
	var n = document.getElementById("textbox").value;
	var x = 0;
	if (n>0) {
		for(i = 0; i < n; i++){
			while(x <= i){
				y = y + "*";
				x ++;
			}
			x = 0;
			y = y + '<br>';
		}
		document.getElementById("res").innerHTML = y;
	}else{
		window.alert("Porfa escribe un número positivo");
	}
}