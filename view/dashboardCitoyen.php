<?php require 'view/includes/sidebarCitoyen.php'; ?>
<?php require 'view/includes/headerCitoyen.php'; ?>

<div class="container mt-4">
  <h2>Mes demandes</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Type d'acte</th>
        <th>Statut</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($demandes as $demande): ?>
        <tr>
          <td><?= htmlspecialchars($demande['id_demande']) ?></td>
          <td><?= htmlspecialchars($demande['type_acte']) ?></td>
          <td><?= htmlspecialchars($demande['statut']) ?></td>
          <td>
            <?php if ($demande['statut'] === 'traiter' && !empty($demande['document_pdf'])): ?>
              <a href="uploads/<?= htmlspecialchars($demande['document_pdf']) ?>" class="btn btn-sm btn-success" download>Télécharger</a>
            <?php else: ?>
              <span class="text-muted">Non disponible</span>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
