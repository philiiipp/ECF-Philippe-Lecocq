<?php

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@500&family=Playfair+Display&family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <meta charset="utf-8">
        <title>Se connecter | Le Quai Antique </title>
        <link rel="stylesheet" href="qa-style.css">
    </head>

    <body class="form-background">
        <div class="log-in-form-container">
            <div class="form-title">
                <img class="form-logo"src="./images-quai-antique/logo-qa-noir.png">
                <p>Connectez-vous pour continuer</p>
            </div>      
            <form method="get" action="">
                <div class="form-layout">
                    <input class="form-grey-bar" type="email" id="email" name="email" placeholder="Saisissez votre adresse e-mail" required>
                    <input class="form-grey-bar" type="password" id="password" name="password" placeholder="Saisissez votre mot de passe" required>
                </div>
                <div class="form-submit-box">
                    <input class="form-submit" type="submit" value="Continuer">
                </div>            
            </form>
        </div>
        <script type="text/javascript" src="qa-script.js"></script>
    </body>
</html>