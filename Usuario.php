<?php

    require_once("autoload.php");
    class Usuario extends Conexion{
        private $nombre ; 
        private $telefono ; 
        private $email ; 
        private $conexion ; 

        public function __construct(){
            $this->conexion = new Conexion () ; 
            $this->conexion= $this->conexion->connect();

        }

        //Método para insertar un usuario 
        public function insertUsuario (string $nombre, string $telefono, string $email){
            $this->nombre = $nombre; 
            $this->telefono = $telefono ; 
            $this->email = $email ; 

            $sql = "INSERT INTO usuario(nombre, telefono, email)
                     VALUES (?,?,?) "; 
            
            $insert = $this->conexion->prepare($sql); 
            $arrData = array($this->nombre,$this->telefono,$this->email);
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId(); 
            return $idInsert ; 
            return $resInsert;

        }

        //Método para listar todos los usuarios 
        public function listUsers(){
            $sql = "SELECT * FROM usuario";
            $execute = $this->conexion->query($sql) ;
            $request = $execute->fetchAll(PDO::FETCH_ASSOC); 
            return $request ; 

        }
        

         
    }

?>