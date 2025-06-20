<?php
require_once 'model/Demande.php';
require_once __DIR__ . '/../vendor/autoload.php';

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

    require 'view/demandeDetail.php';
}

//Generer le fichier pdf

function generer_pdf_action() {
    $id = $_GET['id'] ?? null;
    $type = $_GET['type'] ?? null;

    if (!$id || !$type) {
        echo "Paramètres manquants.";
        return;
    }

    $demande = getDemandeByIdAndType($id, $type);

    if (!$demande) {
        echo "Demande introuvable.";
        return;
    }

    // Crée une instance TCPDF
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);

    // Contenu du PDF
    $html = '<h1>Détails de la demande</h1><ul>';
    foreach ($demande as $champ => $valeur) {
        $html .= '<li><strong>' . htmlspecialchars($champ) . ' :</strong> ' . htmlspecialchars((string)($valeur ?? '')) . '</li>';
    }
    $html .= '</ul>';

    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->Output("demande_{$id}.pdf", 'I'); 
}
