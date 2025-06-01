<?php
require_once 'model/DemandeNaissance.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php?page=home');
    exit;
}

function nettoyer($valeur) {
    return htmlspecialchars(trim($valeur));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nom' => nettoyer($_POST['nom'] ?? ''),
        'prenoms' => nettoyer($_POST['prenoms'] ?? ''),
        'date_naissance' => $_POST['date_naiss'] ?? '',
        'lieu_naissance' => nettoyer($_POST['lieu_naiss'] ?? ''),
        'numero_acte' => nettoyer($_POST['numero_acte'] ?? ''),
        'date_acte' => $_POST['date_acte'] ?? '',
        'numero_registre' => nettoyer($_POST['numero_registre'] ?? ''),
        'nom_pere' => nettoyer($_POST['nom_pere'] ?? ''),
        'prenoms_pere' => nettoyer($_POST['prenoms_pere'] ?? ''),
        'nom_mere' => nettoyer($_POST['nom_mere'] ?? ''),
        'prenoms_mere' => nettoyer($_POST['prenoms_mere'] ?? ''),
        'user_id' => $_SESSION['user_id']
    ];

    // Gestion du fichier uploadé
    if (isset($_FILES['fileInput']) && $_FILES['fileInput']['error'] === 0) {
        $typesAutoriser = ['application/pdf', 'image/jpeg', 'image/png'];
        $typeFichier = mime_content_type($_FILES['fileInput']['tmp_name']);
        $tailleFichier = $_FILES['fileInput']['size'];

        if (!in_array($typeFichier, $typesAutoriser)) {
            die("Type de fichier non autorisé.");
        }

        if ($tailleFichier > 2 * 1024 * 1024) {
            die("Fichier trop volumineux (max 2 Mo).");
        }

        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileName = uniqid() . '_' . basename($_FILES['fileInput']['name']);
        $filePath = $uploadDir . $fileName;

        if (!move_uploaded_file($_FILES['fileInput']['tmp_name'], $filePath)) {
            die("Échec de l'envoi du fichier.");
        }

        $data['fichier'] = $fileName;
    } else {
        $data['fichier'] = null;
    }

    // Enregistrement via modèle
    $model = new DemandeNaissanceModel($pdo);
    $model->enregistrerDemande($data);

    header("Location: index.php?page=confirmation");
    exit;
} else {
    header("Location: index.php?page=demande_naissance");
    exit;
}
