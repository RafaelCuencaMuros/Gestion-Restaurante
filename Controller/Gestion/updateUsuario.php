<?php
// Importamos las clase y Autoloader de Twig
require_once '../../Model/usuario.php';

if (isset($_POST["editusuario"])) {
    
    // Recuperamos el objeto para update luego en base de datos
    $usuario = Usuario::getUsuarioById($_POST["idEdit"]);
    
    //Cambiamos los atributos del objeto obtenido
    $usuario->setNombre($_POST["usuarioEdit"]);
    $usuario->setTipo($_POST["tipoEdit"]);
    
    // Hacemos Update y guardamos el resultado en una variable
    $resultado =  $usuario->update();
    
    // Si el resultado es false significara que ha fallado sino, habra sido un exito
    if ($resultado == false) {
        echo "error";   
    } else {
        echo "success";
    }
} else { // Si no hemos enviado el ID simplemente aparecera error
    echo "error1";  
}