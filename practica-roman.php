<?php

/**
 * Función que devuelve un saludo.
 *
 * @autor mariajose
 * @version 1.0
 * @param string $nombre Recoge el nombre.
 * @return string Devuelve la concatenación del saludo con el nombre.
 * @copyright Mj
 */
function saludar($nombre){
  return  "Hola " . $nombre;
}

/**
 * Función que devuelve el cuadrado de un número.
 *
 * @autor mariajose
 * @version 1.0
 * @param string $nombre Recoge el número.
 * @return string Devuelve el cuadrado del número pasado por parámetro.
 * @copyright Mj
 */
function cuadrado($num) {
  return $num * $num;
}

echo "<p>";
echo "FUNCIÓN 'saludar' => ";
echo saludar("Fernando");
echo "</p>";

echo " || ";

echo "<p>";
echo "FUNCIÓN 'cuadrado' => ";
echo cuadrado(4);
echo "</p>";

?>

