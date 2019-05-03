<?php
function validarRegionOrigen($post)
{
    if(isset($post['region-origen'])) {
        return true;
    }
    return false;
}

function validarComunaOrigen($post)
{
    if(isset($post['comuna-origen'])) {
        return true;
    }
    return false;
}

function validarRegionDestino($post)
{
    if(isset($post['region-destino'])) {
        return true;
    }
    return false;
}

function validarComunaDestino($post)
{
    if(isset($post['comuna-destino'])) {
        return true;
    }
    return false;
}

function validarFechaViaje($post)
{
    if(isset($post['fecha-viaje'])) {
        $expr_reg = "/^\d{4}-\d{2}-\d{2}$/";
        if(preg_match($expr_reg, $post['fecha-viaje'])) {
            return true;
        }
    }
    return false;
}

function validarEspacioNecesario($post)
{
    if(isset($post['espacio-necesario'])) {
        return true;
    }
    return false;
}

function validarTipoMascota($post)
{
    if(isset($post['tipo-mascota'])) {
        return true;
    }
    return false;
}

function validarFotosMascota($post)
{
    if(isset($post['foto-mascota']) || isset($post['foto-mascota2']) || isset($post['foto-mascota3']) || 
        isset($post['foto-mascota4']) || isset($post['foto-mascota5'])) {
        return true;
    }
    return false;
}

function validarNombre($post)
{
    if(isset($post['nombre']) && strlen($post['nombre']) >= 3 && strlen($post['nombre']) <= 80) {
        return true;
    }
    return false;
}

function validarEmail($post)
{
    if(isset($post['email'])) {
        $expr_reg = "/^(([^<>()\[\]\\.,;:\s@]+(\.[^<>()\[\]\\.,;:\s@]+)*)|(.+))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
        if(preg_match($expr_reg, $post['email'])) {
            return true;
        }
    }
    return false;
}

function validarCelular($post)
{
    if(isset($post['celular'])) {
        $expr_reg = "/^(\+?56)?(\s?)(0?9)(\s?)[987654321]\d{7}$/";
        if(preg_match($expr_reg, $post['celular'])) {
            return true;
        }
    }
    return false;
}
?>

