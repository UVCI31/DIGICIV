
    <?php require 'view/includes/header.php'; ?>


    <section class="R py-4">
        <div class="container feuille">
        <div class="feuille2">
        <h2 class="text-center mb-4">Demande d'Acte de decès </h2>
        <form action="post" id="form_id"  >
          <fieldset>
             <h3 class="mb-3">Veuillez renseigner les informations du défunt</h3>

             <div class="infoper mb-4">
              <div class="row">
                <div class="epoux">
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
                  <label class="form-label">Profession du défunt</label>
                  <input type="text" class="form-control" placeholder="Nom du père" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Date du décès</label>
                  <input type="date" class="form-control" placeholder="Nom de la mère" />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Lieu du décès</label>
                  <input type="text" class="form-control" placeholder="Nom de la mère" />
                </div>

                </div>
              </div>
              
            </div>

            <div class="mb-4">
              <h4>Document à Fournir</h4>
              <p class="text-red">*le Certificat de décès ou de Mortalité, CNI du defunt, CNI du déclarant</p>
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

<?php require 'view\includes\footer.php' ?>