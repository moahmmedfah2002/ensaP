<?php
session_start();
if(!empty($_SESSION["user"])){
    

    include("../view/ajoutView.php");
    include("../modele/ajoutModele.php");
    if(!empty($_POST["sub"])){

    
    $user=$_SESSION["user"];
    $date=$_POST["date"];
    $jour=$_POST["jour"];
    $horaire=$_POST["horaire"];
    $module=$_POST["module"];
    $loc=$_POST["loc"];
    $serv=$_POST["serv"];
    $res=$_POST["resModule"];
    $niveau=$_POST["niv"];
    $ajout=new ajout($date,$jour,$horaire,$module,$loc,$serv,$res,$niveau);}

}else{
    session_destroy();
    header("Location:authenControlleur.php");

}




?>