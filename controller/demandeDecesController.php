<?php
require_once 'model/demandeDeces.php';
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
            'nom_defunt_demande' => nettoyer($_POST['nom_defunt'] ?? ''),
            'prenom_defunt_demande' => nettoyer($_POST['prenom_defunt'] ?? ''),
            'sexe_demande' => nettoyer($_POST['sexe'] ?? ''),
            'fonction_demande' => nettoyer($_POST['fonction'] ?? ''),
            'date_naissance_demande' => $_POST['date_naissance'] ?? '',
            'date_deces_demande' => $_POST['date_deces'] ?? '',
            'lieu_deces_demande' => nettoyer($_POST['lieu_deces'] ?? ''),
            'nom_pere_demande' => nettoyer($_POST['nom_pere'] ?? ''),
            'prenom_pere_demande' => nettoyer($_POST['prenom_pere'] ?? ''),
            'nom_mere_demande' => nettoyer($_POST['nom_mere'] ?? ''),
            'prenom_mere_demande' => nettoyer($_POST['prenom_mere'] ?? ''),
            'traite_par' => '', 
            'document_joint_path' => null
        ];
        
        if (isset($_FILES['fileInput']) && $_FILES['fileInput']['error'] === 0) {
            $allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];
            $type = mime_content_type($_FILES['fileInput']['tmp_name']);
            $size = $_FILES['fileInput']['size'];

            if (!in_array($type, $allowedTypes)) die("Type de fichier non autorisé.");
            if ($size > 2 * 1024 * 1024) die("Fichier trop volumineux.");

            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
            $fileName = uniqid() . '_' . basename($_FILES['fileInput']['name']);
            $filePath = $uploadDir . $fileName;

            if (!move_uploaded_file($_FILES['fileInput']['tmp_name'], $filePath)) {
                die("Échec de l'envoi du fichier.");
            }

            $data['document_joint_path'] = $fileName;
        }

        if (enregistrerDemandeDeces($data)) {
            $_SESSION['demande_deces'] = $data;
            header('Location: index.php?page=confirmationDeces');
            exit;
        } else {
            die("Erreur lors de l'enregistrement de la demande.");
        }
    }
}
