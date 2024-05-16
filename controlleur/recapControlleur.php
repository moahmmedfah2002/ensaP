<?php
include("../modele/recapModele.php");
$rec=new recap();
$tab=$rec->get();
include("../view/recapView.php");




?>