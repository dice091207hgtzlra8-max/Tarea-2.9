<?php
require_once("funciones_esc.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<form action="" method="POST">
    <a href="Etrick.php">Sopa</a><br>
    <label>Nombre completo</label><br>
    <input type="text" name="n" id="n" required>
    <br><br>
    <label>Nombre de la escuela</label><br>
    <input type="text" name="e" id="e" required>
    <br><br>
    <label>Año de ingreso</label><br>
    <input type="number" name="a" id="a" required>
    <br><br>
    <button type="submit" name="Procesar">Generar Usuario</button>
</form>

<?php  
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $n = $_POST['n']; 
    $e = $_POST['e'];
    $a = $_POST['a'];
    $p = limpiarNombre(convertirMinusculas($n));
    $s = obtenerInstitucion(convertirMinusculas($e));
    $k = obtenerAño($a);

    echo "Usuario generado: " . generarUsuario($p, $s, $k);
}
?>
</body>
</html>
