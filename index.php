<?php
// Déclaration des sessions à utiliser pour la page d'affichage sur otherPage.php
session_start();
$_SESSION["prenom"] = "Gaëtan";
$_SESSION["nom"] = "GIBERT";
$_SESSION["age"] = 22;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <!-- Lien pour accéder à la page d'affichage des sessions -->
    <a href="./otherPage.php">Autre page</a>

    <!-- Formulaire pour créer un compte avec les cookies en se redirigeant sur la page de traîtement validateLogin.php -->
    <form action="validateLogin.php" method="POST">
        <label for="username">Votre login :</label>
        <input type="text" name="username" id="username" value="<?= isset($_COOKIE['username']) ? base64_decode($_COOKIE['username']) : "" ?>">
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" value="<?= isset($_COOKIE['pass']) ? base64_decode($_COOKIE['pass']) : "" ?>">
        <input type="submit" name="submit" id="submit" value="Se connecter">
    </form>
</body>
</html>