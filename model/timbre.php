<?php
require_once 'model/database.php';

function enregistrerPaiement($motif,$user_id, $montant) {
    $db = getConnection();

    $stmt = $db->prepare("INSERT INTO timbre (libelle,id_utilisateur, montant) VALUES (:motif,:user_id, :montant)");
    return $stmt->execute([
        ':motif' => $motif,
        ':user_id' => $user_id,
        ':montant' => $montant
        
    ]);
}
