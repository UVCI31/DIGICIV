<?php
function index_action() {
    // Vérifier si l'utilisateur est connecté
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php?page=login");
        exit;
    }

    // Vérifier si les données de la demande sont présentes
    if (!isset($_SESSION['demande'])) {
        // Si l'utilisateur essaie d'accéder à la confirmation sans avoir rempli le formulaire
        header("Location: index.php?page=demandeNaissance");
        exit;
    }

    $_SESSION['motif_paiement'] = 'Paiement extrait de naissance';
    $_SESSION['montant_paiement'] = 500;
    // Afficher la vue confirmation
    require 'view/confirmation.php';
}
function paiement_effectue_action() {
    require 'view/paiement_effectue.php';
}
