<?php
require_once 'model/database.php';

function enregistrerDemandeMariage($data) {
    $db = getConnection();

    $sql = "INSERT INTO demande_acte_mariage (
        id_demandeur, numero_acte_demande, date_acte_demande, numero_registre_demande,
        nom_conjoint_demande, prenoms_conjoint_demande, date_naissance_conjoint_demande,
        lieu_naissance_conjoint_demande, domicile_conjoint_demande, fonction_conjoint_demande,
        nom_pere_conjoint_demande, nom_mere_conjoint_demande,
        nom_conjointe_demande, prenoms_conjointe_demande, date_naissance_conjointe_demande,
        lieu_naissance_conjointe_demande, domicile_conjointe_demande, fonction_conjointe_demande,
        nom_pere_conjointe_demande, nom_mere_conjointe_demande, document_joint_path, traite_par
    ) VALUES (
        :id_demandeur, :numero_acte_demande, :date_acte_demande, :numero_registre_demande,
        :nom_conjoint_demande, :prenoms_conjoint_demande, :date_naissance_conjoint_demande,
        :lieu_naissance_conjoint_demande, :domicile_conjoint_demande, :fonction_conjoint_demande,
        :nom_pere_conjoint_demande, :nom_mere_conjoint_demande,
        :nom_conjointe_demande, :prenoms_conjointe_demande, :date_naissance_conjointe_demande,
        :lieu_naissance_conjointe_demande, :domicile_conjointe_demande, :fonction_conjointe_demande,
        :nom_pere_conjointe_demande, :nom_mere_conjointe_demande, :document_joint_path, :traite_par
    )";

    $stmt = $db->prepare($sql);

    return $stmt->execute($data);
}
