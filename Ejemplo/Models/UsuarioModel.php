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

     function getid_usuario()
    {
        return $this->id_usuario;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellidos()
    {
        return $this->apellidos;
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

    function setid_usuario($id_usuario)
    {
        return $this->id_usuario;
    }
   
   
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
    echo 'Imprimiendo todos los usuarios...';

    $query = $this->db->query("SELECT * FROM t_usuario");
    return $query;
    }


    public function crear(){
        $sql = "INSERT INTO t_usuario(id_usuario, nombre, apellido, email, password);
        VALUES({$this->id_usuario},'{$this->nombre}','{$this->apellidos}','{$this->email}','{$this->password}');";

        $guardar = $this->db->query($sql);
        return $guardar;
    }
    
    
}