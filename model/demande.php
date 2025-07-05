<?php
require_once 'model/database.php';
//pagination des demande en attente
function getDemandesEnAttentePaginated($limit, $offset)
{
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
function getTotalDemandesEnAttente()
{
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


// recuperation des demandes traiter
function getDemandesTraiter()
{
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

//recuperation des demandes rejeter
function getDemandesRejete()
{
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


function getDemandesEnAttente()
{
    $pdo = getConnection();
    $sql = "SELECT id, type_acte FROM demande WHERE statut = 'en_attente'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//fonction pour recuperer les demande par id et type
function getDemandeByIdAndType($id, $type)
{
    $pdo = getConnection();
    $table = '';

    switch (strtolower($type)) {
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

//fonction pour recuperer les demande par utilisateur

function getDemandesParUtilisateur($idUtilisateur)
{
    $pdo = getConnection();

    $sql = "
        SELECT id_demande, 'Extrait de naissance' AS type_acte, statut, document_joint_path
        FROM demande_extrait
        WHERE id_utilisateur = :id
        
        UNION ALL

        SELECT id_demande, 'Acte de mariage' AS type_acte, statut, document_joint_path
        FROM demande_acte_mariage
        WHERE id_utilisateur = :id

        UNION ALL

        SELECT id_demande, 'Acte de décès' AS type_acte, statut, document_joint_path
        FROM demande_deces
        WHERE id_utilisateur = :id
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $idUtilisateur, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//fonction recuperer l extrait

function extraitExistePourDemande($id_demande)
{
    $pdo = getConnection();

    $sql = "
        SELECT extrait_naissance.*
        FROM demande_extrait
        JOIN extrait_naissance
        ON demande_extrait.numero_acte = extrait_naissance.num_acte
        WHERE demande_extrait.id_demande = :id_demande
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_demande', $id_demande, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC); 
}

//LA fonction pour marquer la demande comme traiter
function marquerDemandeCommeTraitee($id, $type) {
    $pdo = getConnection();

    switch (strtolower($type)) {
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
            return false;
    }

    $sql = "UPDATE $table 
            SET statut = 'traiter', 
                date_traitement = NOW(), 
                traite_par = :admin 
            WHERE id_demande = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':admin', $_SESSION['admin']['nom'] ?? 'inconnu');
    
    return $stmt->execute();
}
//ENREGISTRER LE PDF GENERER DANS LA TABLE EXTRAIT
function enregistrerCheminPdf($num_extrait, $fileName) {
    $pdo = getConnection();
    $sql = "UPDATE extrait SET pdf = :pdf WHERE num_extrait = :num_extrait";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':pdf' => $fileName,
        ':num_extrait' => $num_extrait
    ]);
}


