<?php
require_once 'model/Demande.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once 'pdf/pdfcreateur.php';

function detail_action() {
    $id = $_GET['id'] ?? null;
    $type = $_GET['type'] ?? null;

    if (!$id || !$type) {
        echo "Erreur : ID ou type manquant.";
        return;
    }

    $demande = getDemandeByIdAndType($id, $type);

    if (!$demande) {
        echo "Erreur : Demande introuvable.";
        return;
    }

    $demande['type_acte'] = $type;
    require 'view/demandeDetail.php';
}

function generer_pdf_action() {
    $id = $_GET['id'] ?? null;
    $type = $_GET['type'] ?? null;

    if (!$id || !$type) {
        echo "Paramètres manquants.";
        return;
    }

    //  On récupère la demande depuis la table demande_extrait
    $demande = getDemandeByIdAndType($id, $type);

    if (!$demande) {
        echo "Demande introuvable.";
        return;
    }

    //  On s'assure que le type est bien "extrait de naissance"
    if (strtolower($type) !== 'extrait de naissance') {
        echo "Seuls les extraits de naissance peuvent être générés.";
        return;
    }

    //  Vérification des deux champs nécessaires
    $num_acte = $demande['numero_acte'] ?? null;
    $num_registre = $demande['numero_registre'] ?? null;

    if (!$num_acte || !$num_registre) {
        echo "Numéro d'acte ou registre manquant dans la demande.";
        return;
    }

    //  On cherche un extrait dans la table extrait avec les deux valeurs
    $extrait = extraitExistePourDemande($id);

    if (!$extrait) {
        echo "Extrait inexistant. La demande n'a pas encore été traitée.";
        return;
    }

    //  Génération du PDF depuis les données de l'extrait
    $fileName = genererPdfDepuisExtrait($extrait);
    enregistrerCheminPdf($extrait['num_extrait'], $fileName);

    // Message de confirmation
    echo "Extrait généré avec succès et disponible dans l’espace citoyen.";

    // Mettre à jour le statut
    marquerDemandeCommeTraitee($id, $type);
}
