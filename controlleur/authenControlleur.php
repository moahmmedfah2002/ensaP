<?php
session_start();
include("../modele/authenModele.php");
include("../view/authenView.php");

if(!empty($_POST["sub"])){
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    if((!empty($user))&&(!empty($pass))){
        $a=new auth($user,$pass);
        

    }
}
?>