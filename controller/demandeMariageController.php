<?php
require_once 'model/demandeMariage.php';

function enregistrer_action() {
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?page=home');
        exit;
    }

    function nettoyer($val) {
        return htmlspecialchars(trim($val));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'id_demandeur' => $_SESSION['user']['id_utilisateur'],
            'numero_acte_demande' => nettoyer($_POST['numero_acte'] ?? ''),
            'date_acte_demande' => $_POST['date_acte'] ?? '',
            'numero_registre_demande' => nettoyer($_POST['numero_registre'] ?? ''),
            'nom_conjoint_demande' => nettoyer($_POST['nom_conjoint'] ?? ''),
            'prenoms_conjoint_demande' => nettoyer($_POST['prenoms_conjoint'] ?? ''),
            'date_naissance_conjoint_demande' => $_POST['date_naiss_h'] ?? '',
            'lieu_naissance_conjoint_demande' => nettoyer($_POST['lieu_naiss_h'] ?? ''),
            'domicile_conjoint_demande' => nettoyer($_POST['dom_h'] ?? ''),
            'fonction_conjoint_demande' => nettoyer($_POST['fonction_h'] ?? ''),
            'nom_pere_conjoint_demande' => nettoyer($_POST['nom_pere_h'] ?? ''),
            'nom_mere_conjoint_demande' => nettoyer($_POST['nom_mere_h'] ?? ''),
            'nom_conjointe_demande' => nettoyer($_POST['nom_f'] ?? ''),
            'prenoms_conjointe_demande' => nettoyer($_POST['prenoms_f'] ?? ''),
            'date_naissance_conjointe_demande' => $_POST['date_naiss_f'] ?? '',
            'lieu_naissance_conjointe_demande' => nettoyer($_POST['lieu_naiss_f'] ?? ''),
            'domicile_conjointe_demande' => nettoyer($_POST['dom_f'] ?? ''),
            'fonction_conjointe_demande' => nettoyer($_POST['fonction_f'] ?? ''),
            'nom_pere_conjointe_demande' => nettoyer($_POST['nom_pere_f'] ?? ''),
            'nom_mere_conjointe_demande' => nettoyer($_POST['nom_mere_f'] ?? ''),
            'traite_par' => '',
        ];

        // Gestion du fichier joint
        if (isset($_FILES['fileInput']) && $_FILES['fileInput']['error'] === 0) {
            $allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];
            $type = mime_content_type($_FILES['fileInput']['tmp_name']);
            $size = $_FILES['fileInput']['size'];

            if (!in_array($type, $allowedTypes)) {
                die("Type de fichier non autorisé.");
            }

            if ($size > 2 * 1024 * 1024) {
                die("Fichier trop volumineux.");
            }

            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

            $fileName = uniqid() . '_' . basename($_FILES['fileInput']['name']);
            $filePath = $uploadDir . $fileName;

            if (!move_uploaded_file($_FILES['fileInput']['tmp_name'], $filePath)) {
                die("Échec de l'envoi du fichier.");
            }

            $data['document_joint_path'] = $fileName;
        } else {
            $data['document_joint_path'] = null;
        }

        if (enregistrerDemandeMariage($data)) {
            $_SESSION['demande_mariage'] = $data;
            header("Location: index.php?page=confirmationMariage");
            exit;
        } else {
            die("Erreur lors de l'enregistrement.");
        }
    }
}
