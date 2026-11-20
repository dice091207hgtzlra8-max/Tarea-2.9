<?php
function convertirMinusculas($t){
    return strtolower($t);
}
function limpiarNombre($n) {
    $l = trim($n);
    $l = str_replace(" ", "", $l);
    return $l;
}
function obtenerInstitucion($e) {
    $l = str_replace(" ", "", trim($e));
    return substr($l, 0, 2);
}
function obtenerAño($a) {
    $l = trim($a);
    return substr($l, -2);
}
function generarUsuario($p, $s, $k) {
    $u = $p . $s . $k;
    return str_replace(" ", "", $u);
}
?>
