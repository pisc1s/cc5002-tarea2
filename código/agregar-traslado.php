<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='UTF-8'>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="tarea1.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="tarea1.js"></script>
		<title>Agregar traslado</title>
	</head>
	<body>
		<div class="topnav">
  			<a href="index.html" id="inicio">Inicio</a>
  			<a class=active href="agregar-traslado.php" id="agregar-traslado">Agregar traslado</a>
  			<a href="agregar-voluntario.html" id="agregar-voluntario">Agregar voluntario</a>
  			<a href="ver-traslados.html" id="ver-traslados">Ver traslados</a>
			<a href="ver-voluntarios.html" id="ver-voluntarios">Ver voluntarios</a>
		</div>
		<br>
		<div class="avisos">
			<?php
				if(isset($_GET['errores'])) {
					echo $_GET['errores'];
				}
			?>
		</div>
		<form id="traslado-form" method="post" action="procesar_traslado.php">
			<div class="row">
				<div class="column">
					<fieldset>
						<legend>Origen:</legend>
						<label>Región:</label><br>
						<select id="region-origen" name="region-origen">
						</select>
						<span id="region-origen-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
						<label>Comuna:</label><br>
						<select id="comuna-origen" name="comuna-origen">
						</select>
						<span id="comuna-origen-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
					</fieldset>
					<br>
					<fieldset>
						<legend>Destino:</legend>
						<label>Región:</label><br>
						<select id="region-destino" name="region-destino" >
						</select>
						<span id="region-destino-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
						<label>Comuna:</label><br>
						<select id="comuna-destino" name="comuna-destino">
						</select>
						<span id="comuna-destino-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
					</fieldset>
					<br>
					<fieldset>
						<legend>Viaje:</legend>
						<label>Fecha:</label><br>
						<input type="text" size=10 id="fecha-viaje" name="fecha-viaje" placeholder="aaaa-mm-dd">
						<span id="fecha-viaje-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
						<label>Espacio necesario:</label><br>
						<select id="espacio-necesario" name="espacio-necesario">
							<option disabled selected>Seleccionar dimensiones</option>
							<option value="1">30x30x30</option>
							<option value="2">50x50x50</option>
							<option value="3">100x100x100</option>
							<option value="m�s">más</option>
						</select>
						<span id="espacio-necesario-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
						<div id="más-espacio-necesario">
							<label>Ingrese el espacio necesario:</label><br>
							<input type="text" id="más-espacio-necesario-input" name="m�s-espacio-necesario-input">
							<span id="más-espacio-necesario-input-span" style="display: none; color: #CC0000;">Campo requerido</span>
						</div>
					</fieldset>
				</div>
				<div class="column">
					<fieldset>
						<legend>Mascota:</legend>
						<label>Tipo:</label><br>
						<select id="tipo-mascota" name="tipo-mascota">
							<option disabled selected>Seleccionar tipo</option>
							<option value="1">perro</option>
							<option value="2">gato</option>
							<option value="3">hámster</option>
							<option value="4">conejo</option>
							<option value="5">tortuga</option>
							<option value="6">otro</option>
						</select>
						<span id="tipo-mascota-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
						<label>Foto:</label><br>
						<input type="file" id="foto-mascota" name="foto-mascota">
						<input type="file" id="foto-mascota2" name="foto-mascota2">
						<input type="file" id="foto-mascota3" name="foto-mascota3">
						<input type="file" id="foto-mascota4" name="foto-mascota4">
						<input type="file" id="foto-mascota5" name="foto-mascota5">
						&nbsp;
						<input type="button" value="Agregar otro archivo" class="btn" id="agregar-otro-archivo">
						<br><span id="foto-mascota-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
						<label>Descripción:</label><br>
						<textarea cols=40 rows=8 id="descripcion-mascota" name="descripcion-mascota"></textarea>
						<br><span id="descripcion-mascota-span" style="display: none; color: #CC0000;">Debe ingresar 500 caracteres o menos</span>
					</fieldset>
					<br>
					<fieldset>
						<legend>Contacto:</legend>
						<label>Nombre:</label><br>
						<input type="text" size=80 id="nombre" name="nombre">
						<span id="nombre-span" style="display: none; color: #CC0000;">Campo requerido</span>
						<br><br>
						<label>Email:</label><br>
						<input type="text" size=30 id="email" name="email">
						<span id="email-span" style="display: none; color: #CC0000;">Campo requerido</span><br><br>
						<label>Número de celular:</label><br>
						<input type="text" size=15 id="celular" name="celular" placeholder="+56911111111">
						<span id="celular-span" style="display: none; color: #CC0000;">Debe ingresar un número de celular en el formato +56911111111</span><br><br>
					</fieldset>
					<br>
					<input type="submit" value="Enviar" style="float:right" class="btn enviar-traslado" id="enviar-traslado">
				</div>
			</div>
		</form>
	</body>
</html>