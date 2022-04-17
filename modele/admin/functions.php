<?php
session_start();

try {
    $connexion = new PDO('mysql:host=localhost;dbname=efoot', "root", "");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage();
    die();
}
