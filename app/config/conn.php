<?php 

class Conection{

    //Atributos
    private $db;
    private $user;
    private $host;
    private $password;
    private $conn; //DEFINIR LA CONEXIÓN.

    //Constructor
    /**
     * Summary of __construct
     * 
     * Cuando se crea un OBJETO o en otras palabras, una INSTANCIA DE LA CLASE. Si la clase TIENE UN CONSTRUCTOR, lo primero que va a hacer es APUNTAR AL CONSTRUCTOR Y EJECUTAR LO QUE TIENE AHÍ ADENTRO.
     */
    public function __construct(){
        $this->setConnect();
    }

    //Funciones. 
    /**
     * 
     * 
     * 
     */
    public function setConnect(){
        //Aca están las viriables para conectar.
        include_once 'config.php';
        $this->db = $database;
        $this->user = $user;
        $this->host = $host;
        $this->password = $password;

    }

    public function getConnect(){


        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->db);

        if ($this->conn) {
            echo 'conexión exitosa';
        }else{
            echo "conexión fallo ".$this->conn->connect_error;
        }

        return $this->conn;


    }

   
}

?>