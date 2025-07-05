<?php
require_once 'model/demande.php';
    function index_action()
    {
        if (!isset($_SESSION['user']['id_utilisateur'])) {
            header('Location: index.php?page=login');
            exit;
        }

        $idUtilisateur = $_SESSION['user']['id_utilisateur'];

        // Appel à une fonction qu'on va créer juste après
        $demandes = getDemandesParUtilisateur($idUtilisateur);

        require 'view/dashboardCitoyen.php';
    }