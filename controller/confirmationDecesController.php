<?php
function index_action() {
    // Vérifier si l'utilisateur est connecté
    if (!isset($_SESSION['user'])) {
        header("Location: index.php?page=login");
        exit;
    }

    // Vérifier si les données de la demande sont présentes
    if (!isset($_SESSION['demande_deces'])) {
        // Rediriger s'il n'y a pas eu de demande préalable
        header("Location: index.php?page=demandeDeces");
        exit;
    }

    $_SESSION['motif_paiement'] = 'Paiement acte de décès';
    $_SESSION['montant_paiement'] = 500;

    // Afficher la vue de confirmation
    require 'view/confirmationDeces.php';
}

function paiement_effectue_action() {
    require 'view/paiement_effectue.php';
}
