<?php

function guardarTraslado($db, $comuna_origen, $comuna_destino, $fecha_viaje, $espacio, $tipo_mascota_id, $descripcion, $nombre_contacto, $email_contacto, $celular_contacto)
{
    $stmt = $db->prepare("INSERT INTO traslado (comuna_origen, comuna_destino, fecha_viaje, espacio, tipo_mascota_id, descripcion, nombre_contacto, email_contacto, celular_contacto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisiissss", $comuna_origen_bd, $comuna_destino_bd, $fecha_viaje_bd, $espacio_bd, $tipo_mascota_id_bd, $descripcion_bd, $nombre_contacto_bd, $email_contacto_bd, $celular_contacto_bd);
    $comuna_origen_bd = limpiar($db, $comuna_origen);
    $comuna_destino_bd = limpiar($db, $comuna_destino);
    $fecha_viaje_bd = limpiar($db, $fecha_viaje);
    $espacio_bd = limpiar($db, $espacio);
    $tipo_mascota_id_bd = limpiar($db, $tipo_mascota_id);
    $descripcion_bd = limpiar($db, $descripcion);
    $nombre_contacto_bd = limpiar($db, $nombre_contacto);
    $email_contacto_bd = limpiar($db, $email_contacto);
    $celular_contacto_bd = limpiar($db, $celular_contacto);
    if ($stmt->execute()) {
        return true;
    }
    return false;
}

function limpiar($db, $str)
{
    return htmlspecialchars($db->real_escape_string($str));
}

function obtenerComunas($db)
{
    $sql = "SELECT id, nombre FROM comuna";
    $result = $db->query($sql);
    $res = array();
    while ($row = $result->fetch_assoc()) {
        $res[$row['id']] = $row['nombre'];
    }
    return $res;
}

function guardarMásEspacio($db, $espacio)
{
    $stmt = $db->prepare("INSERT INTO espacio (valor) VALUES (?)");
    $stmt->bind_param("i", $espacio_bd);
    $espacio_bd = limpiar($db, $espacio);
    if ($stmt->execute()) {
        return true;
    }
    return false;
}

function obtenerEspacios($db)
{
    $sql = "SELECT id, valor FROM espacio";
    $result = $db->query($sql);
    $res = array();
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}
?>