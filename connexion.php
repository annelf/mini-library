<?php

$connexion = '';
$e = '';

try {
    $connexion = new PDO(BDD_DSN, BDD_USER, BDD_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (Exception $e) {
    echo('Error');
    die('Something went wrong with the bdd connexion');
}
