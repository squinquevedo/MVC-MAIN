<?php

require_once 'config/database.php';

class Usuario
{
    public $id_usuario;
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    private $db;

    public function __construct()
    {
        $this->db = database::conectar();
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellidos()
    {
        return $this->apellido;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getPassword()
    {
        return $this->password;
    }

    //Set

    function setNombre($nombre)
    {
        return $this->nombre;
    }

    function setApellidos($apellidos)
    {
        return $this->apellidos;
    }

    function setEmail($email)
    {
        return $this->email;
    }

    function setPassword($password)
    {
        return $this->password;
    }

    //Metodo que consulte la BD

    public function conseguirTodos(){
        //var_dump($this->db);
        $query = $this->db->query("SELECT * FROM t_usuario");
        return $query;

        echo 'Imprimiendo todos los usuarios.....';
    }

    
}