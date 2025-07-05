<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Chargement de TCPDF via Composer

/**
 * Génère un extrait de naissance à partir des données de la table `extrait`.
 *
 * @param array $extrait Données de l'extrait (doit contenir les champs pertinents).
 */
function genererPdfDepuisExtrait($extrait) {
    
    $pdf = new TCPDF();

    $pdf->AddPage();
    $pdf->SetFont('dejavusans', '', 12);

    $pdf->Write(0, 'Extrait de naissance');
    $pdf->Ln(10);

    foreach ($extrait as $key => $value) {
        $pdf->Write(0, ucfirst($key) . ' : ' . $value);
        $pdf->Ln(5);
    }

    //  Définir le chemin de sauvegarde
    $directory = __DIR__ . '/../fichiers_extraits/';
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true); // Crée le dossier s’il n'existe pas
    }

    //  Générer un nom de fichier unique
    $fileName = 'extrait_' . $extrait['num_extrait'] . '.pdf';
    $filePath = $directory . $fileName;

    // Enregistrer le PDF sur le serveur
    $pdf->Output($filePath, 'F');

    //  Retourner le nom du fichier pour l’enregistrer en base
    return $fileName;
}

