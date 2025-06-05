<?php require 'view/includes/header.php'; ?>
<section class="R py-4">
  <div class="container feuille">
    <div class="feuille2">
      <h2 class="text-center mb-4">Demande d'Acte de Mariage </h2>
        <form method="post" action="index.php?page=demandeMariage&action=enregistrer" enctype="multipart/form-data">
        <fieldset>
          <h3 class="mb-3">Veuillez renseigner vos informations</h3>

          <div class="infoper mb-4">
            <div class="row">
              <div class="epoux">
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
              <h4>Mariage entre</h4>
                <h5>Monsieur</h5>
                <div class="col-md-6 mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom_conjoint" class="form-control" placeholder="Nom" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="prenoms" class="form-label">Prénoms</label>
                  <input type="text" name="prenoms_conjoint" class="form-control" placeholder="Prénoms" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date" class="form-label">Date de naissance</label>
                  <input type="date" name="date_naiss_h" class="form-control" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Lieu de naissance</label>
                  <input type="text" name="lieu_naiss_h" class="form-control" placeholder="Lieu de naissance" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Domicile</label>
                  <input type="text" name="dom_h" class="form-control" placeholder="domicile" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">fonction</label>
                  <input type="text" name="fonction_h" class="form-control" placeholder="fonction" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom du père</label>
                  <input type="text" name="nom_pere_h" class="form-control" placeholder="Nom du père" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom de la mère</label>
                  <input type="text" name="nom_mere_h" class="form-control" placeholder="Nom de la mère" />
                </div>

              </div>
            </div>
            <div class="row">
              <div class="epouse">
                <h5>Madame</h5>
                <div class="col-md-6 mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom_f" class="form-control" placeholder="Nom" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="prenoms" class="form-label">Prénoms</label>
                  <input type="text" name="prenoms_f" class="form-control" placeholder="Prénoms" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date" class="form-label">Date de naissance</label>
                  <input type="date" name="date_naiss_f" class="form-control" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Lieu de naissance</label>
                  <input type="text" name="lieu_naiss_f" class="form-control" placeholder="Lieu de naissance" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Domicile</label>
                  <input type="text" name="dom_f" class="form-control" placeholder="Lieu de naissance" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">fonction</label>
                  <input type="text" name="fonction_f" class="form-control" placeholder="Lieu de naissance" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom du père</label>
                  <input type="text" name="nom_pere_f" class="form-control" placeholder="Nom du père" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nom de la mère</label>
                  <input type="text" name="nom_mere_f" class="form-control" placeholder="Nom de la mère" />
                </div>
              </div>
            </div>
          </div>

          <div class="mb-4">
            <h4>Document à Fournir</h4>
            <p class="text-red">*un ancien Extrait de Naissance</p>
            <div class=" upload-area" id="upload-area">
              <p>Glisser deposer vos fichier</p>
              <input type="file" id="fileInput" multiple hnameden>
              <button type="button" onclick="getElementByname('fileInput').click"> Ou selectionnez un fichier</button>

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
<?php require 'view/includes/footer.php'; ?>