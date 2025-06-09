<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renseigner</title>
    <link rel="stylesheet" href="styl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<script src="script.js"></script>
<body>
    <header>
<div class="en-tete d-flex justify-content-between align-items-center px-3">
      <p class="logoprincip text-white">Digiciv</p>
        <nav class="menu" id="menu">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a href="#Accueil" class="nav-link text-white">Accueil</a>
            </li>
            <li class="nav-item">
              <a href="#FaireMaDemande" class="nav-link text-white">Faire ma demande</a>
            </li>
            <li class="nav-item">
              <a href="#APropos" class="nav-link text-white">À propos de Digiciv</a>
            </li>
          </ul>
        </nav>

        <!-- Logo droite -->
         <div class="logos-droite d-flex align-items-center">
            <img src="image/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="armoiries de la Côte d'Ivoire" class="logoci" />
            <img src="image/san-pedro-removebg-removebg-preview.png" alt="mairie de San Pedro" class="logosp" />
    
         </div>
         <img src="image/burger-bar (1).png" alt="boutonmenu" class="menuburger" id="btn-menu">

      </div>
      
    </div>    </header>
    <section class="R py-4">
        <div class="container feuille">
        <div class="feuille2">
        <h2 class="text-center mb-4">Demande d'Acte de Mariage </h2>
        <form action="post" id="form_id"  >
          <fieldset>
             <h3 class="mb-3">Veuillez renseigner vos informations</h3>

             <div class="infoper mb-4">
              <h4>Mariage entre</h4>
              <div class="row">
                <div class="epoux">
                 <h5>Monsieur</h5>
                    <div class="col-md-6 mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" id="nom" class="form-control" placeholder="Nom" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="prenoms" class="form-label">Prénoms</label>
                  <input type="text" id="prenoms" class="form-control" placeholder="Prénoms" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date" class="form-label">Date de naissance</label>
                  <input type="date" id="date" class="form-control" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Lieu de naissance</label>
                  <input type="text" id="lieu" class="form-control" placeholder="Lieu de naissance" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom du père</label>
                  <input type="text" class="form-control" placeholder="Nom du père" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom de la mère</label>
                  <input type="text" class="form-control" placeholder="Nom de la mère" />
                </div>

                </div>
              </div>
              <div class="row">
                <div class="epouse">
                 <h5>Madame</h5>
                    <div class="col-md-6 mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" id="nom" class="form-control" placeholder="Nom" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="prenoms" class="form-label">Prénoms</label>
                  <input type="text" id="prenoms" class="form-control" placeholder="Prénoms" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date" class="form-label">Date de naissance</label>
                  <input type="date" id="date" class="form-control" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Lieu de naissance</label>
                  <input type="text" id="lieu" class="form-control" placeholder="Lieu de naissance" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom du père</label>
                  <input type="text" class="form-control" placeholder="Nom du père" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom de la mère</label>
                  <input type="text" class="form-control" placeholder="Nom de la mère" />
                </div>
                </div>
              </div>
            </div>

            <div class="mb-4">
              <h4>Document à Fournir</h4>
              <p class="text-red">*un ancien Extrait de Naissance</p>
              <div class=" upload-area" id="upload-area">
                <p>Glisser deposer vos fichier</p>
                <input type="file" id="fileInput" multiple hidden>
                <button type="button" onclick="getElementById('fileInput').click"> Ou selectionnez un fichier</button>
                
              </div>
            </div>
            
            <div class="row">
             <div class="col bouton">
              <button type="submit" class="btn btn-submit">Suivant</button>
             </div>
            </div>
            
          </fieldset>
        </form>
      </div>
    </div>
  </section>
</body>
<footer class="text-white py-4 ">
  <div class="container">
    <div class="row">
      <!-- Colonne de gauche : Logos et description -->
      <div class="col-md-6">
        <div class="footer-logo">
          <div class="ci-div d-flex">
            <img src="image/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="logo CI" class="ci-footer">
            <p class="desc"> République de cote d'ivoire</p>
          </div>
          <div class="sp-div d-flex">
            <img src="image/san-pedro-removebg-removebg-preview.png" alt="logo SP" class="sp-footer">
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

    <!-- Icônes de réseaux sociaux en bas à gauche -->
    <div class="row mt-3">
      <div class="col-md-6 d-flex align-items-center media">
        <img src="image/logo-gmail.png" alt="gmail" class="gmail">
        <img src="image/youtube (3).png" alt="youtube" class="youtube">
        <img src="image/facebook (2).png" alt="facebook" class="facebook">
      </div>
    </div>
  </div>
   <p class="copy">    Copyright &copy;, Avril 2025, Tous droits réservés.</p>
</footer>

</html>