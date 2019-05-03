<?php
require_once('diccionarios.php');
require_once('validaciones.php');
require_once('db_config.php');
require_once('consultas.php');

$errores = array();
if(!validarRegionOrigen($_POST)) {
    $errores[] = "Debe escoger región de origen.";
}
if(!validarComunaOrigen($_POST)) {
    $errores[] = "Debe escoger comuna de origen.";
}
if(!validarRegionDestino($_POST)) {
    $errores[] = "Debe escoger región de destino.";
}
if(!validarComunaDestino($_POST)) {
    $errores[] = "Debe escoger comuna de destino.";
}
if(!validarFechaViaje($_POST)) {
    $errores[] = "Debe escoger una fecha de viaje con formato aaaa-mm-dd.";
}
if(!validarEspacioNecesario($_POST)) {
    $errores[] = "Debe escoger un valor de espacio necesario.";
}
if(!validarTipoMascota($_POST)) {
    $errores[] = "Debe escoger un tipo de mascota";
}
if(!validarFotosMascota($_POST)) {
    $errores[] = "Debe entregar al menos una foto de su mascota";
}
if(!validarNombre($_POST)) {
    $errores[] = "Debe entregar un nombre que tenga entre 3 y 80 caracteres de largo.";
}
if(!validarEmail($_POST)) {
    $errores[] = "Debe entregar un email válido";
}
if(!validarCelular($_POST)) {
    $errores[] = "Debe entregar un número de celular válido en Chile.";
}
if(count($errores) > 0) {
    header("Location: agregar-traslado.php?errores=".implode($errores, "<br>"));
    return;
}

$comuna_origen = obtenerComuna($_POST['comuna-origen']);
$comuna_destino = obtenerComuna($_POST['comuna-destino']);
$fecha_viaje = $_POST['fecha-viaje'];
if(isset($_POST['más-espacio-necesario-input'])) {
    $db = DbConfig::getConnection();
    guardarMásEspacio($db, $_POST['más-espacio-necesario-input']);
    $espacio_id = $db->insert_id;
    $db->close();
} else {
    $espacio_id = $_POST['espacio-necesario'];
}
$espacio = obtenerEspacio($espacio_id);
$tipo_mascota_id = obtenerTipoDeMascota($_POST['tipo-mascota']);
$descripcion = $_POST['descripcion-mascota'];
$nombre_contacto = $_POST['nombre'];
$email_contacto = $_POST['email'];
$celular_contacto = $_POST['celular'];

$db = DbConfig::getConnection();
$res = guardarTraslado($db, $_POST['comuna-origen'], $_POST['comuna-destino'], $fecha_viaje, $espacio_id, $_POST['tipo-mascota'], $descripcion, $nombre_contacto, $email_contacto, $celular_contacto);
$db->close();
if($res == true) {
    header("Location: index.html"); 
}
?>