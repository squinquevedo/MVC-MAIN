<h1>Bienvenido a mi Web</h1>

<?php
// require_once 'controllers/UsuarioController.php';
// require_once 'controllers/ProductoController.php';

require_once 'Autoload.php';


//var_dump($_GET['controller']);
if(isset($_GET['controller']))
{
  $nombre_controlador = $_GET['controller'];  
}else{
    echo 'La pagina que buscas no existe';
}

if (class_exists($nombre_controlador)){
    $controlador=new $nombre_controlador();
    if (isset($_GET['action'])&& method_exists($controlador,$_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo 'La pagina que buscas no existe';
    }
}else{
    echo 'La pagina que buscas no existe';
}