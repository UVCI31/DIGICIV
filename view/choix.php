<?php require 'view/includes/header.php'; ?>

    <main class="choix">
        <h3 class="titre-acte">Choisissez un acte d'etat civil pour poursuivre</h3>
            <div class="choix-section">
                <div class="extrait">
                  <a href="index.php?page=formExtrait">
                   <p id="strong">Extrait d'acte de Naissance</p>
                  <img src="./assets/images/document orange.png"alt="Doc" class="doc">
                </a>
                </div>
                <div class="mariage">
                  <a href="index.php?page=formMariage">
                   <p id="strong">Acte de Mariage</p>
                   <img src="./assets/images/document orange.png" alt="Doc" class="doc">
                  </a>
                </div>
                <div class="deces" >
                  <a href="index.php?page=formDeces">
                    <p id="strong">Acte de Decès</p>
                    <img src="./assets/images/document orange.png" alt="Doc" class="doc">
                  </a>
     
                </div>
            </div>
    </main>
    <?php require 'view/includes/footer.php'; ?>
