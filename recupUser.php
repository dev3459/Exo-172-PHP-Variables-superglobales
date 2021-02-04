<?php
// Affichage des informations des users cookies des pouvant être créer dans la page index.php et modifier dans la page modifInfosUser.php
echo base64_decode($_COOKIE['username'])." ". base64_decode($_COOKIE['pass']);