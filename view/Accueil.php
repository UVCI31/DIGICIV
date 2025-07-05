
</!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Digiciv Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>


<body>

  <header>
    <div class="degrade position-relative">
      <img src="./assets/images/famille.jpg" alt="Faites votre demande d'acte" class=" img-responsive accueil" />
      <div class="callToAction">
        <h1>Faites Votre Demande D’acte D’état civil sans sortir de chez vous</h1>
        <a  href="index.php?page=choix" type="button" class="btn btn-degrade text-white ">Commencer</a>
    </div>
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

      <!-- Zone utilisateur connectée -->
      <div class="d-flex align-items-center text-white">
        <?php if (isset($_SESSION['user'])): ?>
          <a href="index.php?page=dashboardCitoyen" class="d-flex align-items-center text-white text-decoration-none">
          <i class="bi bi-person-circle" style="font-size: 1.5rem; margin-right: 8px;"></i>
            <span><?= htmlspecialchars($_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom']) ?></span>
          </a>
        <?php else: ?>
          <a href="index.php?page=login" class="btn btn-light btn-sm ms-2">Connexion</a>
        <?php endif; ?>
      </div>

      <!-- Logos droite -->
      <div class="logos-droite d-flex align-items-center ms-3">
        <img src="./assets/images/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="armoiries de la Côte d'Ivoire" class="logoci" />
        <img src="./assets/images/san-pedro-removebg-removebg-preview.png" alt="mairie de San Pedro" class="logosp" />
      </div>

    <img src="./assets/images/burger-bar (1).png" alt="boutonmenu" class="menuburger" id="btn-menu">
  </div>
</header>

  

  <main class="container my-5">
    
    <section class="avantages row  text-center">

      <div class="avt-cont col-sm-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
        <div class="arondi">
            <img src="./assets/images/line.png" alt="fini les files d'attentes" class="icone" />
        </div>
        <p>Fini les files d'attentes</p>
      </div>

      <div class="avt-cont col-sm-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
        <div class="arondi">
            <img src="./assets/images/cote-divoire.png" alt="Quelle que soit votre localité" class="icone" />
        </div>
        <p>Quelle que soit votre localité</p>
      </div>
      <div class="avt-cont col-sm-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
        <div class="arondi">
            <img src="./assets/images/authentification-du-profil (1).png" alt="Un compte pour chaque citoyen" class="icone"/>
        </div>
        <p>Un compte pour chaque citoyen</p>
      </div>
    </section>

    <section class="illustration text-center mt-5">
        <div class="callToAction2">
            <h2>Vous êtes nouveau par ici ? Découvrez comment faire une Demande</h2>
            <a type="button" class="btn btn-degrade text-white">Faire Ma Demande</a>
          </div>
      <video src="" controls></video>
      
    </section>
  </main>
  
<footer class="text-white py-4">
  <div class="container">
    <div class="row">
      <!-- Colonne de gauche : Logos et description -->
      <div class="col-md-6">
        <div class="footer-logo">
          <div class="ci-div d-flex">
            <img src="./assets/images/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="logo CI" class="ci-footer">
            <p class="desc"> République de cote d'ivoire</p>
          </div>
          <div class="sp-div d-flex">
            <img src="./assets/images/san-pedro-removebg-removebg-preview.png" alt="logo SP" class="sp-footer">
            <p class="desc">Mairie de San-Pedro</p>
          </div>
        </div>
        <p class="footer-description">Ce site répond à un projet de digitalisation des procédures de demande d’acte d’état civil.</p>
      </div>

      <!-- Colonne de droite : Liens -->
      <div class="col-md-6 liens">
        <ul class="text-md-end">
          <li class="lien"><a href="#conditions">Conditions d'utilisation</a></li>
          <li class="lien"><a href="#confidentialite">Politique de confidentialité</a></li>
          <li class="lien"><a href="#mentions">Mentions légales</a></li>
        </ul>
      </div>
    </div>

    <!-- Icônes de réseaux sociaux  -->
    <div class="row mt-3">
      <div class="col-md-6 d-flex align-items-center media">
        <img src="./assets/images/logo-gmail.png" alt="gmail" class="gmail">
        <img src="./assets/images/youtube (3).png" alt="youtube" class="youtube">
        <img src="./assets/images/facebook (2).png" alt="facebook" class="facebook">
      </div>
    </div>
  </div>
   <p class="copy">    Copyright &copy;, Avril 2025, Tous droits réservés.</p>
</footer>
<script src="./assets/js/script.js"></script>
</html>
