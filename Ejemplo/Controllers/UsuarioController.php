<?php

//Aca mostramos las acciones que puede hacer el cntrolador

class UsuarioController{
    public function mostrarTodos(){
        require_once 'Models/UsuarioModel.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once './Views/Usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once './Views/Usuarios/UsuarioModel.php';
        $PracticanteDeBodega = new usuario();
        $PracticanteDeBodega->setid_usuario('null');
        $PracticanteDeBodega->setNombre('Juan Sebastian');
        $PracticanteDeBodega->setApellidos('Nieto');
        $PracticanteDeBodega->setEmail('jnieto@gmail');
        $PracticanteDeBodega->setPassword('abc2123');

        $guardar=$PracticanteDeBodega->crear();

        require_once './Views/Usuarios/crear.php';
    }
}