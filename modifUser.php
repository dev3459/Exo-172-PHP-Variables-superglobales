<?php
// Page de traîtement du formulaire de modifInfosUser.php
if(isset($_POST['user'], $_POST['newUser'], $_POST['pass'], $_POST['newPass'], $_POST['newPassConfirm'], $_POST['submit'])){
    if($_POST['user'] === base64_decode($_COOKIE['username']) && $_POST['pass'] === base64_decode($_COOKIE['pass'])){
        if($_POST['newPass'] === "" && !empty($_POST['newUser'])){
            setcookie('username', base64_encode($_POST['newUser']));
            $success = "L'username a été changé !";
            header('Location: ./modifInfosUser.php?success='.$success);
        }else{
            if($_POST['newPass'] === $_POST['newPassConfirm']){
                setcookie("username", base64_encode($_POST['newUser']), time() + (60 * 60 * 24), "/", "localhost");
                setcookie("pass", base64_encode($_POST['newPass']), time() + (60 * 60 * 24), "/", "localhost");
                $success = "L'username et le mot de passe ont été changé !";
                header('Location: ./modifInfosUser.php?success='.$success);
            }else{
                $erreur = "Les nouveaux mots de passe ne correspondent pas !";
                header('Location: ./modifInfosUser.php?error='.$erreur);
            }
        }
    }else{
        $erreur = "Merci de renseigner vos réelles anciennes informations.";
        header('Location: ./modifInfosUser.php?error='.$erreur);
    }
}