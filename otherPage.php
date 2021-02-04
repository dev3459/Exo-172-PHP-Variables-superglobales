<?php
// Affichage des sessions Prenom Nom et Age qui ont été déclaré dans la page index.php
session_start();
echo $_SESSION['prenom']." ".$_SESSION['nom']." ".$_SESSION['age'];