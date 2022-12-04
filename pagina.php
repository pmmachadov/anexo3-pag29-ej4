<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea una función que reciba como parámetro una cadena de texto con el nombre
de un color, y retorne otra cadena con el código del color correspondiente en HTML.
Para ello la función debe implementar internamente una matriz asociativa con los
siguientes valores:
Clave Código
Azul #0000FF
Rojo #FF0000
Magenta #FF00FF
Verde #00FF00
Cyan #00FFFF
Amarillo #FFFF00
Blanco #FFFFFF  -->

    <?php
include 'funlib.php';

echo "<table border = 1>";
echo "<tr>";
echo "  <td> Pablo  </td>";
echo "  <td> Machado </td>";
echo "</tr>";
echo "<td> " . "Ejercicio" . "</td>";
echo "<td> " . "anexo3-pag29-ej4" . "</td>";
echo "</tr>";
echo "<td> " . "echo color(" . "Azul" . ")" . "</td>";
" . ";
echo "<td> " . "#0000FF" . "</td>";
echo "</tr>";
echo "</table>";

echo color("Azul");
?>

</body>

</html>