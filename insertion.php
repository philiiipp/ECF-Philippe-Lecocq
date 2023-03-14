<?php

try {
    $objetPdo = new PDO('mariadb:host=localhost;dbname=quai_antique_1','root','16205');
} catch (PDOException $e) {
    var_dump('Oh non');
}