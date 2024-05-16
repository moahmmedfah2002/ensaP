<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENUE</h1>
    <form action="authenControlleur.php" method="post">
        <label for="utilisateur">Utilisateur</label>
        <input type="text" name="user"><br>
        <label for="mot de passe">Mot de pass</label>
        <input type="password" name="pass" ><br>
        <input type="submit" name="sub" value="Se connecter">
        <button type="button">Annuler</button>
    </form>
</body>
</html>