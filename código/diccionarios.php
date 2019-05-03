<?php
require_once('db_config.php');
require_once('consultas.php');

function obtenerComuna($id) 
{
    $db = DbConfig::getConnection();
    $comunas = obtenerComunas($db);
    $db->close();
    return $comunas[$id];
}

function obtenerEspacio($id)
{
    $db = DbConfig::getConnection();
    $espacios = obtenerEspacios($db);
    $db->close();
    return $espacios[$id];
}

function obtenerTipoDeMascota($id) {
    if($id == 1) {
        return "perro";
    } else if($id == 2) {
        return "gato";
    } else if($id == 3) {
        return "hámster";
    } else if($id == 4) {
        return "conejo";
    } else if($id == 5) {
        return "tortuga";
    } else if($id = 6) {
        return "otro";
    }
}
?>