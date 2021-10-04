<?php

$idiomaPrueba=$_GET['idioma'];


$idioma_es="Hola mundo en español";

$idioma_en="Hello world in english";

$idioma_de="Hallo Welt auf Deutsch";

$idioma_it="Ciao mondo in italiano";

$idioma_fr="bonjour tout le monde en francais";

$saludo="idioma_".$idiomaPrueba;
// Variable que se va a imprimir siempre

echo "<h1 style='text-align:center; color:brown; margin-top:100px; font-size:49px'>",$$saludo,"</h1>";

?>