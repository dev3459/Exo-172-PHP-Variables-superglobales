<?php
    // Gestion des codes d'erreurs
    if(isset($_GET['error'])){
        echo "<div class='error'>".$_GET['error']."</div>";
    }
?>

<!-- Formulaire pour modifier l'identifiant utilisateur et mot de passe -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modif User</title>
</head>
<body>
    <!-- Formulaire redirigeant sur la page de traîtement modifUser.php -->
    <form action="modifUser.php" method="POST">
        <label for="user">Votre ancien nom :</label>
        <input type="text" name="user" id="user" placeholder="Votre ancien nom">
        <label for="pass">Votre ancien mot de passe :</label>
        <input type="password" name="pass" id="pass">
        <label for="newUser">Votre nom :</label>
        <input type="text" name="newUser" id="newUser" placeholder="Votre nom">
        <label for="newPass">Votre mot de passe :</label>
        <input type="password" name="newPass" id="newPass">
        <label for="newPassConfirm">confirmer votre mot de passe :</label>
        <input type="password" name="newPassConfirm" id="newPassConfirm">
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>