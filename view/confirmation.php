<?php require 'view/includes/header.php'; ?>
<main class="container my-5">
<section class="py-">
    <div class="container feuille">
        <div class="feuille2">
            <h2 class="text-center mt-4 mb-4">Confirmation de votre Demande</h2>

            <div class="recap">
                <h4 class="mb-3">Informations récapitulatives</h4>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nom :</strong> <?= $_SESSION['demande']['nom'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Prénoms :</strong> <?= $_SESSION['demande']['prenoms'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Date de naissance :</strong> <?= $_SESSION['demande']['date_naissance'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Lieu de naissance :</strong> <?= $_SESSION['demande']['lieu_naissance'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Numéro de l'acte :</strong> <?= $_SESSION['demande']['numero_acte'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Date de l'acte :</strong> <?= $_SESSION['demande']['date_acte'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Numéro de registre :</strong> <?= $_SESSION['demande']['numero_registre'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Nom du père :</strong> <?= $_SESSION['demande']['nom_pere'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Prénoms du père :</strong> <?= $_SESSION['demande']['prenoms_pere'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Nom de la mère :</strong> <?= $_SESSION['demande']['nom_mere'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Prénoms de la mère :</strong> <?= $_SESSION['demande']['prenoms_mere'] ?? '' ?></li>
                    <li class="list-group-item"><strong>Document fourni :</strong> <?= $_SESSION['demande']['fichier'] ?? 'Aucun' ?></li>
                </ul>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <form method="post" action="index.php?page=demandeExtrait">
                    <button type="submit" class="btn btn-warning">Modifier</button>
                </form>
                <a href="index.php?page=paiement_effectue&action=index" 
                    onclick="return confirm('Vous serez débité de 500 FCFA. Confirmez-vous le paiement ?')" 
                    class="btn btn-success">
                    Procéder au paiement
                </a>

                <script>
                function confirmerPaiement() {
                    return confirm("Vous serez débité de 500 FCFA. Voulez-vous continuer ?");
                }
                </script>

            </div>
        </div>
    </div>
</section>
</main>

<?php require 'view/includes/footer.php'; ?>
