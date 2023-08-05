<?php
    class Conexion{
        private $host = "localhost";
        private $user = "root"; 
        private $passsword = "root"; 
        private $db = "crud_poo"; 
        private $conect ; 
        
        public function __construct() {
           $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
           try{
            $this->conect = new PDO($connectionString, $this->user, $this->passsword);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            
           }catch(Exception $e){
            echo 'Error al conectar con la DB';
            echo "ERROR: ".$e->getMessage();
           }
        }

        public function connect (){
            return $this->conect  ;
        }

    }
    
    

?>