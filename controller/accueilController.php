<?php
function index_action() {
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?page=home'); // Redirection vers login si pas connecté
        exit;
    }

    require 'view/accueil.php';
}
