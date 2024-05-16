<?php
if($_GET['src']=="login"){
    header("Location:./controlleur/authenControlleur.php");
}elseif($_GET['src']=="recap"){
    header("Location:./controlleur/recapControlleur.php");
}

?>