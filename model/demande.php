<?php
require_once 'model/database.php';
//
function getDemandesEnAttentePaginated($limit, $offset) {
    $pdo = getConnection();
    $sql = "
        SELECT id_demande, 'Extrait de naissance' AS type_acte, date_demande FROM demande_extrait WHERE statut = 'en_attente'
        UNION ALL
        SELECT id_demande, 'Acte de mariage' AS type_acte, date_demande FROM demande_acte_mariage WHERE statut = 'en_attente'
        UNION ALL
        SELECT id_demande, 'Acte de décès' AS type_acte, date_demande FROM demande_deces WHERE statut = 'en_attente'
        ORDER BY date_demande DESC
        LIMIT :limit OFFSET :offset
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//fonction pour compter le nombre total de demande
function getTotalDemandesEnAttente() {
    $pdo = getConnection();

    $sql = "
        SELECT 
            (SELECT COUNT(*) FROM demande_extrait WHERE statut = 'en_attente') +
            (SELECT COUNT(*) FROM demande_acte_mariage WHERE statut = 'en_attente') +
            (SELECT COUNT(*) FROM demande_deces WHERE statut = 'en_attente')
        AS total
    ";

    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['total'];
}


//
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

//
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


function getDemandesEnAttente() {
    $pdo = getConnection();
    $sql = "SELECT id, type_acte FROM demande WHERE statut = 'en_attente'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//fonction pour recuperer les demande
function getDemandeByIdAndType($id, $type) {
    $pdo = getConnection();
    $table = '';

    switch ($type) {
        case 'extrait de naissance':
            $table = 'demande_extrait';
            break;
        case 'acte de mariage':
            $table = 'demande_acte_mariage';
            break;
        case 'acte de décès':
            $table = 'demande_deces';
            break;
        default:
            return null;
    }

    $sql = "SELECT * FROM $table WHERE id_demande = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
//fonction pour recuperer les demande
function getDemandesCitoyen($userId) {
    $pdo = getConnection();

    $sql = "
        SELECT id_demande, 'Extrait de naissance' AS type_acte, statut, document_pdf
        FROM demande_extrait WHERE id_ut = :id
        UNION ALL
        SELECT id_demande, 'Acte de mariage' AS type_acte, statut, document_pdf
        FROM demande_acte_mariage WHERE id_ut = :id
        UNION ALL
        SELECT id_demande, 'Acte de décès' AS type_acte, statut, document_pdf
        FROM demande_deces WHERE id_ut = :id
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}




