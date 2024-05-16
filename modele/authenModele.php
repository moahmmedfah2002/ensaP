<?php
include("../class/PDO.php");
class auth{

    private $conn;
    private $user;
    private $pass;


    function __construct($user,$pass){
        $this->conn=new PDO1();
        $this->user=$user;
        $this->pass=$pass;
        $password=$this->conn->getData("pass","admin","user like'".$this->user."'")[0]["pass"];
        
        if($this->pass==$password){
            $_SESSION["user"]=$this->user;
            header("Location:ajoutControlleur.php");
        }



    }

}


?>