<?php

try {
    $objetPdo = new PDO('mariadb:host=localhost;dbname=quai_antique','root','');

    $objetPdo->setAttribute(PDO:ATTR_ERRMODE, PDO:ERRMODE_EXCPTION);
    echo "Connection success";

} catch (PDOException $e) {
    echo "Error in connection";
}