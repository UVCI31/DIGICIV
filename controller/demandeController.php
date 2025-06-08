<?php
require_once 'model/database.php';

function getDemandesEnAttente() {
    $pdo = getConnection();
    $sql = "SELECT id, type_acte FROM demande WHERE statut = 'en_attente'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDemandesRejete() {
    $pdo = getConnection();
    $sql = "SELECT id, type_acte FROM demande WHERE statut = 'en_attente'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getDemandesTraiter() {
    $pdo = getConnection();
    $sql = "SELECT id, type_acte FROM demande WHERE statut = 'en_attente'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}