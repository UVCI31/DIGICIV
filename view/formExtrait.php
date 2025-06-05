
<?php require 'view/includes/header.php'; ?>

<section class="R py-4">
        <div class="container feuille">
        <div class="feuille2">
        <h2 class="text-center mb-4">Demande d'Extrait de Naissance</h2>
        <form method="post" action="index.php?page=demandeNaissance&action=enregistrer" enctype="multipart/form-data" id="form_id">
          <fieldset>
             <h3 class="mb-3">Veuillez renseigner vos informations</h3>

             <div class="infoper mb-4">
              <h4>Informations personnelles</h4>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom" id="nom" class="form-control"  placeholder="Nom" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="prenoms" class="form-label">Prénoms</label>
                  <input type="text" name="prenoms" id="prenoms" class="form-control" placeholder="Prénoms" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date" class="form-label">Date de naissance</label>
                  <input type="date" name="date_naiss" id="date" class="form-control" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Lieu de naissance</label>
                  <input type="text" id="lieu_naiss" name="lieu_naiss" class="form-control" placeholder="Lieu de naissance" required />
                </div>
              </div>
            </div>

            <!-- Acte de naissance -->
            <div class="mb-4">
              <h4>Acte de naissance</h4>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label class="form-label">Numéro de l'acte</label>
                  <input type="text" name="numero_acte" class="form-control" placeholder="XXXXXXXXXXX" required />
                </div>
                <div class="col-md-4 mb-3">
                  <label class="form-label">Du</label>
                  <input type="date" name="date_acte" class="form-control" />
                </div>
                <div class="col-md-4 mb-3">
                  <label class="form-label">Numéro de registre</label>
                  <input type="text" name="numero_registre" class="form-control" placeholder="R XX" />
                </div>
              </div>
            </div>

            <!-- Parents -->
            <div class="mb-4">
              <h4>Parents</h4>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom du père</label>
                  <input type="text" name="nom_pere" class="form-control" placeholder="Nom du père" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Prénoms du père</label>
                  <input type="text" name="prenoms_pere" class="form-control" placeholder="Prénoms du père" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom de la mère</label>
                  <input type="text" name="nom_mere" class="form-control" placeholder="Nom de la mère" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Prénoms de la mère</label>
                  <input type="text" name="prenoms_mere" class="form-control" placeholder="Prénoms de la mère" />
                </div>
                
              </div>
            </div>


            <div class="mb-4">
              <h4>Document à Fournir</h4>
              <p class="text-red">*un ancien Extrait de Naissance</p>
              <div class=" upload-area" id="upload-area">
                <p>Glisser deposer vos fichier</p>
                <input type="file" name="fileInput" id="fileInput" multiple hidden>
                <button type="button" onclick="getElementById('fileInput').click"> Ou selectionnez un fichier</button>
                
              </div>
            </div>
            <div class="bouton">
                   <button type="submit" class="btn btn-submit">Suivant</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </section>
  <script src="upload.js"></script>
  <?php require 'view/includes/footer.php'; ?>