<?php
require_once 'model/database.php';

function enregistrerDemande($data, $fileName)
{
    $db = getConnection();

    $sql = "INSERT INTO demande_extrait (id_utilisateur, nom, prenoms, date_naissance, lieu_naissance, 
            numero_acte, date_acte, numero_registre, nom_pere, prenoms_pere, nom_mere, prenoms_mere, fichier)
            VALUES (:id_utilisateur, :nom, :prenoms, :date_naissance, :lieu_naissance,
                    :numero_acte, :date_acte, :numero_registre, :nom_pere, :prenoms_pere, :nom_mere, :prenoms_mere, :fichier)";
    
    $stmt = $db->prepare($sql);
    
    return $stmt->execute([
        ':id_utilisateur' => $data['id_utilisateur'],
        ':nom' => $data['nom'],
        ':prenoms' => $data['prenoms'],
        ':date_naissance' => $data['date_naissance'],
        ':lieu_naissance' => $data['lieu_naissance'],
        ':numero_acte' => $data['numero_acte'],
        ':date_acte' => $data['date_acte'],
        ':numero_registre' => $data['numero_registre'],
        ':nom_pere' => $data['nom_pere'],
        ':prenoms_pere' => $data['prenoms_pere'],
        ':nom_mere' => $data['nom_mere'],
        ':prenoms_mere' => $data['prenoms_mere'],
        ':fichier' => $fileName
    ]);
}
