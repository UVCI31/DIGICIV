<?php
require_once 'model/database.php';

function getDemandesEnAttente() {
    $pdo = getConnection();

    $sql = "
        SELECT id_demande, 'Extrait de naissance' AS type_acte FROM demande_extrait WHERE statut = 'en_attente'
        UNION ALL
        SELECT id_demande, 'Acte de mariage' AS type_acte FROM demande_acte_mariage WHERE statut = 'en_attente'
        UNION ALL
        SELECT id_demande, 'Acte de décès' AS type_acte FROM demande_deces WHERE statut = 'en_attente'
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getDemandesTraiter() {
    $pdo = getConnection();

    $sql = "
        SELECT id_demande, 'Extrait de naissance' AS type_acte FROM demande_extrait WHERE statut = 'traiter'
        UNION ALL
        SELECT id_demande, 'Acte de mariage' AS type_acte FROM demande_acte_mariage WHERE statut = 'traiter'
        UNION ALL
        SELECT id_demande, 'Acte de décès' AS type_acte FROM demande_deces WHERE statut = 'traiter'
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getDemandesRejete() {
    $pdo = getConnection();

    $sql = "
        SELECT id_demande, 'Extrait de naissance' AS type_acte FROM demande_extrait WHERE statut = 'rejete'
        UNION ALL
        SELECT id_demande, 'Acte de mariage' AS type_acte FROM demande_acte_mariage WHERE statut = 'rejete'
        UNION ALL
        SELECT id_demande, 'Acte de décès' AS type_acte FROM demande_deces WHERE statut = 'rejete'
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

