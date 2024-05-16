<?php
include("../class/PDO.php");

class recap {
    public $conn;
    function __construct(){
        $this->conn=new PDO1();
        
    }
    function get(){
        $a=$this->conn->getData("*","affectations");
        return $a;
    }
}


?>