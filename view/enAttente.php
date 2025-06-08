<?php require 'view/includes/sidebar.php'; ?>
<?php require 'view/includes/headerAdmin.php'; ?>
<div class="d-block datatable">

  <div class="d-block datatable">
  <div class="div-t">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Acte demandé</th>
          <th scope="col">Détails</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php foreach ($demandes as $demande): ?>
          <tr>
            <th scope="row"><?= htmlspecialchars($demande['id_demande']) ?></th>
            <td><?= htmlspecialchars($demande['type_acte']) ?></td>
            <td class="detail">
              <a href="index.php?page=demande&action=detail&id=<?= $demande['id_demande'] ?>" class="l-flèche">voir plus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


</body>

</html>