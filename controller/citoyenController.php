<?php
    function index_action() {
    if (!isset($_SESSION['user']) || $_SESSION['user']['Role'] !== 'citoyen') {
        header('Location: index.php?page=home');
        exit;
    }

    $userId = $_SESSION['user']['id_ut']; // ou ton champ utilisateur ID
    $demandes = getDemandesCitoyen($userId);

    require 'view/dashboardCitoyen.php';
}