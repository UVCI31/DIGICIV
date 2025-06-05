<?php
require_once 'model/DemandeNaissance.php';
function enregistrer_action()
{
    if (!isset($_SESSION['user'])) {
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
            'id_utilisateur' => $_SESSION['user']['id_utilisateur'] ?? null
        ];

        if (!$data['id_utilisateur']) {
            die("Erreur : identifiant utilisateur manquant.");
        }

        // Gestion du fichier
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
            $fileName = null;
            $data['fichier'] = null;
        }

        if (enregistrerDemande($data, $fileName)) {
            $_SESSION['demande'] = $data;
            header("Location: index.php?page=confirmation");
            exit;
        } else {
            echo "Erreur lors de l'enregistrement de la demande.";
            exit;
        }
    }
}
