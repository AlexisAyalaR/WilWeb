<!DOCTYPE html>
<html>
<head>
	<title>Web ITAM Laboratory</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../img/wil_logo.png" type="image/x-icon">
	<script src="../js/index.js"></script>
</head>
<body onload="generaPerfiles()">
<section class="modal w3-modal" id="imput">
	<div class="w3-third">
		<br>
	</div>
	<div class="modal__imput w3-third  w3-animate-zoom">
		<div class=" modal__div w3-display-container">
			<div onclick="openClose()" class="w3-padding w3-display-topright w3-blue w3-hover-red"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
			<form class="modal__form w3-padding">
			  <p class="modal__imputP w3-text-blue"><b>Iniciar sesión</b></p>
			  <label class="w3-text-blue"><i class="fa fa-user-circle" aria-hidden="true"></i> Usuario</label>
			  <input class="w3-input w3-border w3-light-grey" type="text">
			  <label class="w3-text-blue"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Contraseña</label>
			  <input class="w3-input w3-border w3-light-grey" type="password">
			  <br>
			  <button class="w3-btn w3-grey"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar</button>
			</form>
			<br>
		</div>
	</div>
	<div class="w3-third">
		<br>
		lol
	</div>
</section>
<header class="header">
	<nav class="w3-bar w3-border w3-blue w3-top w3-padding-16">
		<li class="w3-bar-item w3-mobile w3-hover-shadow">
			<div class="header__div1">
				<img src="../img/wil_logo.png" class="header__img">
		</div>
		</li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href=""><i class="fa fa-laptop" aria-hidden="true"></i> Inicio</a></li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href="#article"><i class="fa fa-code" aria-hidden="true"></i> ¿Qué es WIL?</a></li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href="#article"><i class="fa fa-terminal" aria-hidden="true"></i> ¿Porqué WIL?</a></li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href="#article"><i class="fa fa-terminal" aria-hidden="true"></i> ¿Porqué WIL?</a></li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href="#section2"><i class="fa fa-users" aria-hidden="true"></i> About us</a></li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href="#section3"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Cuentanos tu proyecto</a></li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href="#section4"><i class="fa fa-question-circle" aria-hidden="true"></i> Preguntas frecuentes</a></li>
		<li class="w3-bar-item w3-mobile w3-hover-shadow"><a class="link" href="#section6"><i class="fa fa-address-book-o" aria-hidden="true"></i> Contacto</a></li>
		<div class="w3-right w3-hide-medium w3-hide-small">
			<li onclick="openClose()" class="w3-bar-item w3-mobile w3-hover-shadow header__but"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesión</li>
		</dir>
	</nav>
</header>
<section id="section1" class="section1 w3-display-container">
	<div class="w3-text-black w3-display-bottommiddle" style="padding: 50px">
		<span class="w3-xlarge w3-hide-small w3-text-white">Aprende a programar tus páginas web</span><br>
	</div>
	<div class="w3-display-bottomright section1__divImg">
		<img class="section1__img w3-opacity" src="../img/wil_logo.png">
	</div>
</section>
<article id="article" class="article w3-center w3-container">
	<div class="w3-row-padding w3-margin">
		<div class="article__div w3-half">
			<div class="article__div0 w3-padding">
				<div class="">
					<p class="article__p tit">¿Qué es WIL?</p>
					<p class="article__p">
					El Web ITAM Laboratory (WIL) es el laboratorio de desarrollo web del ITAM donde los alumnos aprenden Back-End y Front-End para crear sus propias páginas web. (Más descripción)
					</p>
				</div>
				<div class="article__divImg">
					<img class="article__img w3-image" src="http://www.eyerys.com/sites/default/files/frontend-backend.png">
				</div>
			</div>
		</div>
		<div class="article__div w3-half">
			<div class="article__div1 w3-padding">
				<div class="article__divImg1">
					<img class="article__img1 w3-image" src="https://www.zenprint.com/assets/images/zenstudio_3.jpg">
				</div>
				<p class="article__p tit">¿Porqué WIL?</p>
				<ul class="w3-ul">
					<li>No necesitas saber programar</li>
					<li>Puedes liberar tu servicio social</li>
					<li>Aprendes a tu propio ritmo</li>
					<li>Tu eliges tu horario</li>
				</ul>
			</div>
		</div>
	</div>
</article>
<section id="section2" class="section2 w3-margin">
	<p class="section2__p tit">About us</p>
	<p class="section2__p">Conoce al equipo de WIL:</p>
	<div id="sec" class="section2__div">
	</div>
</section>
<section id="section3" class="section3 w3-center w3-container">
	<div class="w3-row-padding w3-margin">
		<div class="w3-half">
			<div class="w3-margin w3-blue">
				<p class="section3__p tit">Cuéntanos tu proyecto</p>
				<p class="section3__p">
					(Descripción de esta sección) <br>
					Si tines un proyecto en mente pero no sabes cómo desarrollarlo, platicanoslo y te ayudaremos a desarrollarlo.
				</p>
			</div>
		</div>
		<div class="section3__imput w3-half">
			<div class="section3__div1 w3-padding ">
				<form class="section3__form" action="/enviaProyecto" method="post">
				<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
					<div class="">
						<br>
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<label class="w3-text-black"><i class="fa fa-file-text" aria-hidden="true"></i> <b>Tipo de proyecto</b></label>
						<input class="w3-input w3-border w3-light-grey" type="text" name="tipoProyecto">
						<label class="w3-text-black"><i class="fa fa-phone" aria-hidden="true"></i> <b>Teléfono</b></label>
						<input class="w3-input w3-border w3-light-grey" type="number" name="telefono">
						<label class="w3-text-black"><i class="fa fa-envelope-square" aria-hidden="true"></i> <b>Correo</b></label>
						<input class="w3-input w3-border w3-light-grey" type="email" name="email">
						<label class="w3-text-black w3-border-left"><i class="fa fa-pencil-square" aria-hidden="true"></i> <b>Descripción</b></label>
						<textarea class="w3-input w3-border w3-light-grey" type="text" rows="7" name="descripcion"></textarea>
						<br>
						<button class="w3-btn w3-grey w3-round-large"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</button>
						<br>
						<br>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section id="section4" class="section4 w3-margin w3-margin w3-padding">
	<p class="section4__p tit">Preguntas frecuentes</p>
	<dir class="section4__div">
		<p>
			¿Lo que aprendo en el WIL se ve en alguna materia? <br>
			Lamentablemente en ninguna materia del ITAM se ve Back-End o Front-End, es por eso que nación el WIL, para que aquellos que les interese el desarrollo web tangan las herramientas para llevar acabo sus proyectos. <br>
			¿Qué necesito para entrar al WIL? <br>
			Para entrar al WIL solo necesitas una copia de tu credencial y una copia de tu horario. <br>
			¿Tiene algun costo el WIL? <br>
			Las asesorías del WIL son totalmente gratuitas. <br>
			¿Se necesita saber programar para entrar al WIL? <br>
		</p>
	</dir>
</section>
<section id="section6" class="section6 w3-center">
	<p class="section6__p tit">Contacto</p>
	<dir class="section6__div">
		<p class="w3-third">
			<b>Correo:</b> <br>
			wil@itam.mx <br>
			<br>
			<b>Teléfono:</b> <br>
			+52 1 55 1684 3500 <br>
			56 28 4000 ext: 3652
		</p>
		<p class="w3-third">
			<b>Dirección:</b> <br>
			ITAM, Campus Rio Hondo <br>
			Río Hondo #1 <br>
			Col. Progreso Tizapán <br>
			CP. 01080. Álvaro Obregón, <br>
			Ciudad de México <br>
			<br>
		</p>
		<p class="w3-third">
			<div ><iframe src="https://www.mapsdirections.info/crear-un-mapa-de-google/map.php?width=300&height=150&hl=en&q=rio%20hondo%201+(ITAM)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/crear-un-mapa-de-google/">Crear Mapa Google</a> by <a href="https://www.mapsdirections.info/">Mapa España</a></iframe></div>
		</p>
	</dir>
</section>
<footer class="footer w3-center w3-indigo w3-display-container">
	<p class="footer__arriba w3-display-topmiddle w3-hover-opacity"><a class="link" href="#section1">Ir arriba <i class="fa fa-long-arrow-up fa-6" aria-hidden="true"></i></a></p>
	<div class="footer__div w3-blue ">
		<p class="footer__p w3-display-left">
			<a class="footer__a1 w3-hover-opacity" href="https://www.itam.mx/">ITAM</a>
		</p>
		<p class="footer__p1 w3-display-middle link">
			<a href="https://www.facebook.com/webLabItam/?fref=ts" class="footer__a ">
				<i class="fa fa-facebook-square w3-hover-opacity link" aria-hidden="true" style="font-size:36px;"></i>
			</a>
			<a href="https://www.facebook.com/webLabItam/?fref=ts" class="footer__a ">
				<i class="fa fa-twitter-square w3-hover-opacity link" aria-hidden="true" style="font-size:36px;"></i>
			</a>
		</p>
		<p class="footer__p w3-display-right">@WIL, 2017</p>
	</div>
</footer>
</body>
</html>