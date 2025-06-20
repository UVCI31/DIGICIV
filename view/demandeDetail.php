<?php require 'view/includes/sidebar.php'; ?>
<?php require 'view/includes/headerAdmin.php'; ?>

<div style="margin-left: 250px; margin-top: 30px;" >
  <h2>Détails de la demande</h2>
  <ul class="list-group">
    <?php foreach ($demande as $champ => $valeur): ?>
      <li class="list-group-item">
        <strong><?= htmlspecialchars($champ) ?> :</strong>  
        <?= is_string($valeur) ? htmlspecialchars($valeur) : '' ?>
      </li>
    <?php endforeach; ?>
  </ul>

 <a href="index.php?page=demande&action=generer_pdf&id=<?= urlencode($demande['id_demande']) ?>&type=<?= urlencode(strtolower($demande['type_acte'] ?? '')) ?>" class="btn btn-success mt-3">
  Générer en PDF
</a>

</div>

