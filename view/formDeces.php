<?php require 'view/includes/header.php'; ?>


<section class="R py-4">
  <div class="container feuille">
    <div class="feuille2">
      <h2 class="text-center mb-4">Demande d'Acte de decès </h2>
      <form method="post" action="index.php?page=demandeDeces&action=enregistrer" enctype="multipart/form-data">
        <fieldset>
          <h3 class="mb-3">Veuillez renseigner les informations du défunt</h3>

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
                <div class="col-md-6 mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" placeholder="Nom" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="prenoms" class="form-label">Prénoms</label>
                  <input type="text" name="prenoms" class="form-control" placeholder="Prénoms" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date" class="form-label">Date de naissance</label>
                  <input type="date" name="date_naiss" class="form-control" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lieu" class="form-label">Lieu de naissance</label>
                  <input type="text" name="lieu_naiss" class="form-control" placeholder="Lieu de naissance" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Profession du défunt</label>
                  <input type="text" class="form-control" name="profesion" placeholder="profession" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Date du décès</label>
                  <input type="date" class="form-control" name="date_de" placeholder="date du déces" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Lieu du décès</label>
                  <input type="text" class="form-control" name="lieu_de" placeholder="lieu du déces" />
                </div>

              </div>
            </div>

          </div>

          <div class="mb-4">
            <h4>Document à Fournir</h4>
            <p class="text-red">*le Certificat de décès ou de Mortalité, CNI du defunt, CNI du déclarant</p>
            <div class=" upload-area" id="upload-area">
              <p>Glisser deposer vos fichier</p>
              <input type="file" name="fileInput" multiple hidden>
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

<?php require 'view\includes\footer.php' ?>