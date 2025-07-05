<?php
require 'view/includes/header.php';

if (!isset($_SESSION['demande_mariage'])) {
  echo "<div class='container alert alert-danger mt-4'>Aucune demande trouvée.</div>";
  exit;
}

$donnees = $_SESSION['demande_mariage'];
?>
<main class="container my-5">
  <section class="py-4">
    <div class="container feuille">
      <div class="feuille2">
        <h2 class="text-center mb-4">Confirmation de la Demande d’Acte de Mariage</h2>

        <h4 class="mb-3">Informations générales</h4>
        <ul>
          <li><strong>Numéro de l’acte :</strong> <?= htmlspecialchars($donnees['numero_acte_demande']) ?></li>
          <li><strong>Date de l’acte :</strong> <?= htmlspecialchars($donnees['date_acte_demande']) ?></li>
          <li><strong>Numéro du registre :</strong> <?= htmlspecialchars($donnees['numero_registre_demande']) ?></li>
        </ul>

        <hr>

        <h4>Monsieur</h4>
        <ul>
          <li><strong>Nom :</strong> <?= htmlspecialchars($donnees['nom_conjoint_demande']) ?></li>
          <li><strong>Prénoms :</strong> <?= htmlspecialchars($donnees['prenoms_conjoint_demande']) ?></li>
          <li><strong>Date de naissance :</strong> <?= htmlspecialchars($donnees['date_naissance_conjoint_demande']) ?></li>
          <li><strong>Lieu de naissance :</strong> <?= htmlspecialchars($donnees['lieu_naissance_conjoint_demande']) ?></li>
          <li><strong>Domicile :</strong> <?= htmlspecialchars($donnees['domicile_conjoint_demande']) ?></li>
          <li><strong>Fonction :</strong> <?= htmlspecialchars($donnees['fonction_conjoint_demande']) ?></li>
          <li><strong>Nom du père :</strong> <?= htmlspecialchars($donnees['nom_pere_conjoint_demande']) ?></li>
          <li><strong>Nom de la mère :</strong> <?= htmlspecialchars($donnees['nom_mere_conjoint_demande']) ?></li>
        </ul>

        <h4>Madame</h4>
        <ul>
          <li><strong>Nom :</strong> <?= htmlspecialchars($donnees['nom_conjointe_demande']) ?></li>
          <li><strong>Prénoms :</strong> <?= htmlspecialchars($donnees['prenoms_conjointe_demande']) ?></li>
          <li><strong>Date de naissance :</strong> <?= htmlspecialchars($donnees['date_naissance_conjointe_demande']) ?></li>
          <li><strong>Lieu de naissance :</strong> <?= htmlspecialchars($donnees['lieu_naissance_conjointe_demande']) ?></li>
          <li><strong>Domicile :</strong> <?= htmlspecialchars($donnees['domicile_conjointe_demande']) ?></li>
          <li><strong>Fonction :</strong> <?= htmlspecialchars($donnees['fonction_conjointe_demande']) ?></li>
          <li><strong>Nom du père :</strong> <?= htmlspecialchars($donnees['nom_pere_conjointe_demande']) ?></li>
          <li><strong>Nom de la mère :</strong> <?= htmlspecialchars($donnees['nom_mere_conjointe_demande']) ?></li>
        </ul>

        <?php if ($donnees['document_joint_path']): ?>
          <p><strong>Document joint :</strong> <?= htmlspecialchars($donnees['document_joint_path']) ?></p>
        <?php endif; ?>

        <div class="mt-4 d-flex justify-content-between">
          <a href="index.php?page=demande_mariage&modifier=1" class="btn btn-warning">Modifier</a>
          <a href="index.php?page=paiement_effectue&action=index"
            onclick="return confirm('Vous serez débité de 2500 FCFA. Confirmez-vous le paiement ?')"
            class="btn btn-success">
            Procéder au paiement
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require 'view/includes/footer.php'; ?>