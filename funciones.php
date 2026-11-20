<?php
function prim_tres($a){
    $tres = substr($a, 0, 3);
    $mayus=(strtoupper($tres));
    return $mayus;
}
function obtener_año($b){
    $obt =substr($b,2,2);
    return $obt;
}
function obtener_mes_dia($b){
    $mes = substr($b,5,2);
    $dia = substr($b, 8,2);
    return $mes . $dia;
}
?>