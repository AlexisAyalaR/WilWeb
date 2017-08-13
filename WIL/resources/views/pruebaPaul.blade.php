<form class="modal__form w3-padding" action="/envia" method="post">
			 <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
			  <p class="modal__imputP w3-text-blue"><b>Iniciar sesión</b></p>
			  <label class="w3-text-blue"><i class="fa fa-user-circle" aria-hidden="true"></i> Usuario</label>
			  <input class="w3-input w3-border w3-light-grey" type="text" name="usuario">
			  <label class="w3-text-blue"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Contraseña</label>
			  <input class="w3-input w3-border w3-light-grey" type="password" name="contrasena">
			  <br>
			  <button class="w3-btn w3-grey"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar</button>
			</form>