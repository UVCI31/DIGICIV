<?php
// Vérifie que l'admin est connecté
if (!isset($_SESSION['user']['Role']) || $_SESSION['user']['Role'] !== 'admin') {
  header('Location: index.php?page=home');
  exit;
}

$nomComplet = $_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digiciv Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>


<body>
  <header class="bg-white shadow-sm p-3">
    <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

      <!-- Menu + Titre -->
      <div class="d-flex align-items-center gap-3">
        <i class="fas fa-bars fa-lg text-secondary" id="menu-ad" style="cursor: pointer;"></i>
        <span class="fs-5 fw-bold text-dark">Dashboard</span>
      </div>

      <!-- Champ de recherche -->
      <div class="position-relative" style="max-width: 300px;">
        <input type="text" class="form-control ps-5 rounded-pill shadow-sm" placeholder="Rechercher...">
        <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
      </div>

      <!-- Nom de l'admin + icône utilisateur -->
      <div class="d-flex align-items-center gap-2">
        <span class="fw-semibold text-dark">
          <?php echo htmlspecialchars($_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom']); ?>
        </span>
        <i class="fas fa-user-circle fa-xl text-warning"></i>
      </div>

      <!-- Bouton déconnexion -->
      <div class="d-flex align-items-center gap-2">
        <a href="index.php?page=home&action=logout" class="btn btn-outline-danger text-white border-0 btn-sm">
          <i class="fas fa-sign-out-alt me-1"></i> Déconnexion
        </a>
      </div>

      <!-- Logos -->
      <div class="d-flex align-items-center gap-2">
        <img src="./assets/images/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="logo-cote" class="img-fluid" style="height: 40px;">
        <img src="./assets/images/san-pedro-removebg-removebg-preview.png" alt="logo san-pedro" class="img-fluid" style="height: 40px;">
      </div>

    </div>
  </header>