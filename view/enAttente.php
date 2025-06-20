<?php require 'view/includes/sidebar.php'; ?>
<?php require 'view/includes/headerAdmin.php'; ?>
<div class="d-block datatable">
<form method="GET" class="d-flex justify-content-between mb-3 px-3">
  <input type="hidden" name="page" value="enAttente">
  
  <div class="">
    <select name="type_acte" class="form-select">
      <option value="">Tous les actes</option>
      <option value="naissance" <?= ($_GET['type_acte'] ?? '') === 'naissance' ? 'selected' : '' ?>>Naissance</option>
      <option value="mariage" <?= ($_GET['type_acte'] ?? '') === 'mariage' ? 'selected' : '' ?>>Mariage</option>
      <option value="deces" <?= ($_GET['type_acte'] ?? '') === 'deces' ? 'selected' : '' ?>>Décès</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Filtrer</button>
</form>

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
                <a href="index.php?page=demande&action=detail&id=<?= $demande['id_demande'] ?>&type=<?= strtolower($demande['type_acte']) ?>" class="l-flèche">voir plus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="pagination d-flex justify-content-center mt-5">
      <nav>
        <ul class="pagination">
          <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= ($i === $page) ? 'active' : '' ?>">
              <a class="page-link" href="index.php?page=enAttente&p=<?= $i ?>"><?= $i ?></a>
            </li>
          <?php endfor; ?>
        </ul>
      </nav>
    </div>
  </div>



  </body>

  </html>