<?php
require_once 'model/timbre.php';

function index_action() {
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?page=login&action=');
        exit;
    }

    $user_id = $_SESSION['user']['id_utilisateur'];
    $montant = $_SESSION['montant_paiement'] ?? 0;;
    $motif = $_SESSION['motif_paiement'] ?? 'Paiement inconnu';

    // Enregistrement dans la base
    if (enregistrerPaiement($motif,$user_id, $montant)) {
        unset($_SESSION['motif_paiement'], $_SESSION['montant_paiement']);
        include 'view/paiement_effectue.php';
    } else {
        echo "Erreur lors de l'enregistrement du paiement.";
    }
}
