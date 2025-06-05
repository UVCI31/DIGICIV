<?php
require_once 'model/database.php';

function enregistrerDemandeDeces($data) {
    $db = getConnection();

    $sql = "INSERT INTO demande_deces (
                id_demandeur, numero_acte_demande, date_acte_demande, numero_registre_demande,
                nom_defunt_demande, prenom_defunt_demande, sexe_demande, fonction_demande,
                date_naissance_demande, date_deces_demande, lieu_deces_demande,
                nom_pere_demande, prenom_pere_demande, nom_mere_demande, prenom_mere_demande,
                document_joint_path, traite_par
            ) VALUES (
                :id_demandeur, :numero_acte, :date_acte, :numero_registre,
                :nom_defunt, :prenom_defunt, :sexe, :fonction,
                :date_naissance, :date_deces, :lieu_deces,
                :nom_pere, :prenom_pere, :nom_mere, :prenom_mere,
                :document_joint_path, :traite_par
            )";

    $stmt = $db->prepare($sql);

    return $stmt->execute([
        ':id_demandeur' => $data['id_demandeur'],
        ':numero_acte' => $data['numero_acte_demande'],
        ':date_acte' => $data['date_acte_demande'],
        ':numero_registre' => $data['numero_registre_demande'],
        ':nom_defunt' => $data['nom_defunt_demande'],
        ':prenom_defunt' => $data['prenom_defunt_demande'],
        ':sexe' => $data['sexe_demande'],
        ':fonction' => $data['fonction_demande'],
        ':date_naissance' => $data['date_naissance_demande'],
        ':date_deces' => $data['date_deces_demande'],
        ':lieu_deces' => $data['lieu_deces_demande'],
        ':nom_pere' => $data['nom_pere_demande'],
        ':prenom_pere' => $data['prenom_pere_demande'],
        ':nom_mere' => $data['nom_mere_demande'],
        ':prenom_mere' => $data['prenom_mere_demande'],
        ':document_joint_path' => $data['document_joint_path'],
        ':traite_par' => $data['traite_par']
    ]);
}
