<?php
// Page de traitement du formulaire index.php pour créer un compte et l'enregistrer dans les cookies en encodant les informations utilisateur.
if(isset($_POST['username'], $_POST['password'], $_POST['submit'])){
    $user = strip_tags(base64_encode($_POST['username']));
    $pass = strip_tags(base64_encode($_POST['password']));
    if($user !== "R2FldGFu" || $pass !== "MTIzNA=="){
        echo "Erreur : Le nom d'utilisateur ou le mot de passe ne correspondent pas à se créer !";
    }else{
        setcookie("username", $user, time() + (60 * 60 * 24), "/", "localhost");
        setcookie("pass", $pass, time() + (60 * 60 * 24), "/", "localhost");
        echo "Vos informations ont été sauvegarder pour votre prochaine connexion !";
    }
}