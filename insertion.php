<?php

try {
    $objetPdo = new PDO('mysql:host=localhost;dbname=quai_antique','root','');
    echo "Connection success";  

} catch (PDOException $e) {
    echo "Error in connection";
}

$pdoStat = $objetPdo->prepare('INSERT INTO user VALUES (NULL, :email, :password, :convives, :allergies)');

$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAN_STR);
$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAN_STR);
$pdoStat->bindValue(':convives', $_POST['nombre-de-convives'], PDO::PARAN_STR);
$pdoStat->bindValue(':email', $_POST['allergies'], PDO::PARAN_STR);

$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = 'Le contact a été ajouté à la base de donnée';
}
else{
    $message="Echec de l'insertion";
}

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
        <title>S'inscrire | Le Quai Antique </title>
        <link rel="stylesheet" href="qa-style.css">
    </head>
    <body>
        <p><?php echo $message ?></p>
    </body>
</html>