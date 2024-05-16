<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajout</title>
</head>
<body>
    <h1>Bienvenue</h1>
    <form action="ajoutControlleur.php" method="post">
        <label for="date">date</label>
        <input type="text" name="date"><br>
        <label for="jour">jour</label>
        <input type="text" name="jour" ><br>
        <label for="horaire">horaire</label>
        <input type="text" name="horaire" ><br>
        <label for="module">Module</label>
        <input type="text" name="module"><br>
        <label for="loc">LOC</label>
        <input type="text" name="loc"><br>
        <label for="surveillant">SURVAILLANT</label>
        <input type="text" name="serv" ><br>
        <label for="rep_module">res.module</label>
        <input type="text" name="resModule"><br>
        <label for="niveau">niveau</label>
        <input type="text" name="niv"><br>
        <input type="submit" name="sub" value="ajouter">



    </form>
    
</body>
</html>