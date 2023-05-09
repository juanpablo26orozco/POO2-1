<?php
include_once('Persona.php');
$persona = new Persona('Fernando','Gaitan', 20);

echo $persona->saludar();

unset($persona);
