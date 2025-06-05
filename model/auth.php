<?php
// Assure que la session est démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Fonction pour récupérer l'utilisateur connecté
function getUser() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : null;
}

// Fonction pour vérifier si l'utilisateur est connecté
function isLoggedIn() {
    return isset($_SESSION['user']);
}

// Fonction pour vérifier si l'utilisateur est un admin
function isAdmin() {
    return isset($_SESSION['user']) && $_SESSION['user']['Role'] === 'admin';
}
