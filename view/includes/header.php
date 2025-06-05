<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page choix acte</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
<header>
  <div class="en-tete d-flex justify-content-between align-items-center px-3">
    <p class="logoprincip text-white">Digiciv</p>

    <nav class="menu" id="menu">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="index.php?page=accueil" class="nav-link text-white">Accueil</a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=choix" class="nav-link text-white">Faire ma demande</a>
        </li>
        <li class="nav-item">
          <a href="#APropos" class="nav-link text-white">À propos de Digiciv</a>
        </li>
      </ul>
    </nav>

    <!-- Profil et Déconnexion -->
    <div class="d-flex align-items-center text-white">
      <?php if (isset($_SESSION['user'])): ?>
        <a href="index.php?page=profil" class="d-flex align-items-center text-white text-decoration-none me-3">
          <i class="bi bi-person-circle" style="font-size: 1.5rem; margin-right: 8px;"></i>
          <span><?= htmlspecialchars($_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom']) ?></span>
        </a>
        <a href="index.php?page=home&action=logout" class="btn btn-outline-light btn-sm">Déconnexion</a>
      <?php else: ?>
        <a href="index.php?page=login" class="btn btn-light btn-sm ms-2">Connexion</a>
      <?php endif; ?>
    </div>

    <!-- Logos -->
    <div class="logos-droite d-flex align-items-center">
      <img src="./assets/images/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="armoiries de la Côte d'Ivoire" class="logoci" />
      <img src="./assets/images/san-pedro-removebg-removebg-preview.png" alt="mairie de San Pedro" class="logosp" />
    </div>

    <!-- Bouton Menu Mobile -->
    <img src="./assets/images/burger-bar (1).png" alt="boutonmenu" class="menuburger" id="btn-menu">
  </div>
</header>
