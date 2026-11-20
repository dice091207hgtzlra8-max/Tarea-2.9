<?php
require_once("funciones.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuelas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="" method="POST">
        <a href="escuelas.php">Sopas de frijol</a><br>
        <label for="a">Escribe tu nombre completo por favor amigo:</label>
        <input type="text" name="a" id="a" placeholder="Aquí" required>
        <br><br>
        <label for="e">Escribe tu fecha de nacimiento aquí por favor:</label>
        <input type="date" name="b" id="e" required>
        <br><br>

        <button type="submit" name="Procesar">Procesar</button>
        <br><br>
    </form>

    <?php  
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['Procesar'])) {
        $a = $_POST['a']; 
        $b = $_POST['b']; 
        
        echo prim_tres($a);
        echo obtener_año($b);
        echo obtener_mes_dia($b);
    }
    ?>
</body>
</html>
