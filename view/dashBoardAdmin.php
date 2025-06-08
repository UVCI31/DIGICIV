<?php require 'view/includes/headerAdmin.php'; ?>

  <div class="menu-lateral">
    <h3 class="digi-logo">Digiciv</h3>
    <nav class="ad-nav" id="adnav">
      <ul>
        <li class="li-ad">
          <a href="dashboardAdmin.html"><img src="./assets/images/home blanc.png" alt="dashboard" class="ic-home"> Dashboard</a>
        </li>
        <li class="li-ad">
          <a href="#">
            <img src="./assets/images/document blanc (1).png" alt="doc en attentes" class="ic-da">
            Demande traitée</a>
        </li>
        <li class="li-ad">
          <a href="index.php?page=enAttente"><img src="./assets/images/validation blanc (1).png" alt="doc validés" class="ic-v"> Demande en attente</a>
        </li>
        <li class="li-ad">
          <a href="index.php?page=traiter"><img src="./assets/images/error blanc .png" alt="doc rejetés" class="ic-r"> Demande en rejetée</a>
        </li>
        <li class="li-ad">
          <a href="statistique.html"><img src="./assets/images/statistic blanc .png" alt="Statistiques" class="stats"> Statistiques</a>
        </li>
      </ul>
    </nav>
  </div>


  <div class="d-block conteneur-rect">
    <div class="d-flex align-items-center justify-content-center rect">
      <div class="dash-tr">
        <img src="./assets/images/validation (1)vert.png" alt="doc-tr" class="doc-tr">
        <h3 class="nb-d">1500</h3>
        <p class="st">Demandes a traiter</p>
      </div>
      <div class="dash-at">
        <img src="./assets/images/document vert(1).png" alt="doc-at" class="doc-at">
        <h3 class="nb-d">2050</h3>
        <p class="st">Demandes en attentes</p>
      </div>
    </div>
    
    </div>
  <script src="./assets/js/script.js" defer></script>
</body>

</html>