<?php
if (!isset($_SESSION['demande_deces'])) {
    header("Location: index.php?page=demandeDeces");
    exit;
}

$demande = $_SESSION['demande_deces'];
require 'view/includes/header.php';
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Confirmation de la demande d'acte de décès</h2>

    <div class="card p-4">
        <h4 class="mb-3">Informations du défunt :</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Nom :</strong> <?= htmlspecialchars($demande['nom_defunt_demande']) ?></li>
            <li class="list-group-item"><strong>Prénom :</strong> <?= htmlspecialchars($demande['prenom_defunt_demande']) ?></li>
            <li class="list-group-item"><strong>Sexe :</strong> <?= htmlspecialchars($demande['sexe_demande']) ?></li>
            <li class="list-group-item"><strong>Fonction :</strong> <?= htmlspecialchars($demande['fonction_demande']) ?></li>
            <li class="list-group-item"><strong>Date de naissance :</strong> <?= htmlspecialchars($demande['date_naissance_demande']) ?></li>
            <li class="list-group-item"><strong>Date de décès :</strong> <?= htmlspecialchars($demande['date_deces_demande']) ?></li>
            <li class="list-group-item"><strong>Lieu de décès :</strong> <?= htmlspecialchars($demande['lieu_deces_demande']) ?></li>
        </ul>

        <h4 class="mt-4 mb-3">Parents du défunt :</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Nom du père :</strong> <?= htmlspecialchars($demande['nom_pere_demande']) ?></li>
            <li class="list-group-item"><strong>Prénom du père :</strong> <?= htmlspecialchars($demande['prenom_pere_demande']) ?></li>
            <li class="list-group-item"><strong>Nom de la mère :</strong> <?= htmlspecialchars($demande['nom_mere_demande']) ?></li>
            <li class="list-group-item"><strong>Prénom de la mère :</strong> <?= htmlspecialchars($demande['prenom_mere_demande']) ?></li>
        </ul>

        <h4 class="mt-4 mb-3">Informations d'acte :</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Numéro d’acte :</strong> <?= htmlspecialchars($demande['numero_acte_demande']) ?></li>
            <li class="list-group-item"><strong>Date de l’acte :</strong> <?= htmlspecialchars($demande['date_acte_demande']) ?></li>
            <li class="list-group-item"><strong>Numéro du registre :</strong> <?= htmlspecialchars($demande['numero_registre_demande']) ?></li>
        </ul>

        <div class="mt-4 text-center">
            <a href="index.php?page=demandeDeces&modifier=1" class="btn btn-warning">Modifier</a>
            <a href="index.php?page=paiement_effectue&action=index"
            onclick="return confirm('Vous serez débité de 2500 FCFA. Confirmez-vous le paiement ?')"
            class="btn btn-success">
            Procéder au paiement
          </a>
        </div>
        </div>
    </div>
</div>

<?php require 'view/includes/footer.php'; ?>