<!-- Page qui affiche les informations suivante : User Agent, Adresse Ip de la machine, Le nom du serveur -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos utilisateur</title>
</head>
<body>
    <div id="container">
        <p><?= "Votre User Agent est :" . $_SERVER['REMOTE_USER'] ?></p>
        <p><?= "Votre adresse IP est :" . $_SERVER['REMOTE_ADDR'] ?></p>
        <p><?= "Le nom du serveur est :" . $_SERVER['SERVER_NAME'] ?></p>
    </div>
</body>
</html>