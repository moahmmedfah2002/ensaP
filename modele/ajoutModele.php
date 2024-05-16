<?php
include("../class/PDO.php");
class ajout{
   private $date;
   private $jour;
   private $module;
   private $loc;
   private $serv;
   private $res;
   private $niveau;
   private $conn;
   private $horaire;
   function __construct($date,$jour,$horaire,$module,$loc,$serv,$res,$niveau){
    $this->conn=new PDO1();
    $this->date=$date;
    $this->jour=$jour;
    $this->module=$module;
    $this->loc=$loc;
    $this->serv=$serv;
    $this->res=$res;
    $this->niveau=$niveau;
    $this->horaire=$horaire;
    $this->verif();
    
    


   }

   private function verif(){
    @$valide=$this->conn->getData("nom","locale","nom like '".$this->loc."' && horaire like '".$this->horaire."'&& date like '".$this->date."'");
    if(!empty($valide)){
        echo"cette date est reserver";

    }else{
        $this->conn->Insert("affectations","date,jour,horaire,module,loc,surveillant,resModule,niveau","'".$this->date."','".$this->jour."','".$this->horaire."','".$this->module."','".$this->loc."','".$this->serv."','".$this->res."','".$this->niveau."'")[0];
        $this->conn->Insert("locale","nom,date,horaire","'".$this->loc."','".$this->date."','".$this->horaire."'");
    }

   }

}

?>