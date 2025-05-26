<?php

function login_action() {
    $error = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        require_once 'model/user.php';
    $user = getUserByCredentials($username, $password);

    if ($user) {
            $_SESSION['user'] = 'admin';
            header('Location: index.php?page=user&action=dashboard');
            exit;
        } else {
            $error = "Identifiants incorrects.";
        }
    }

    require 'view/login.php';
}

function dashboard_action() {
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?page=user&action=login');
        exit;
    }

    require 'view/dashboard.php';
}

function logout_action() {
    session_destroy();
    header('Location: index.php?page=user&action=login');
    exit;
}