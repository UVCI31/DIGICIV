<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion / Inscription</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style2.css">
</head>
<body>

  <div class="auth-container">
    <!-- Formulaire Connexion -->
    <div class="auth-box orange-bg text-white">
      <h2 class="digiciv">Digiciv</h2>
      <h4 class="mt-3">Heureux de vous revoir !</h4>
      <p class="mot_de_connexion">Connecte-toi pour faire ta demande</p>
      <form>
        <div class="formulaire">
          <label for="nom Complet">Nom Complet</label>
          <input type="text" id="tel_conn" placeholder="Votre Nom complet">
          
          <label for="mdp_conn">Mot de passe</label>
          <input type="password" id="mdp_conn" placeholder="Votre mot de passe">
          
          <button type="submit" class="btn-auth se_connecter">Se connecter</button>
        </div>
      </form>
    </div>

    <!-- Formulaire Inscription -->
    <div class="auth-box white-bg">
      <h4 class="form_enr">Nouveau par ici ?<br>Crée ton compte Digiciv !</h4>
      <form>
        <div class="formulaire">
          <label for="nom et prenom">Nom complet</label>
          <input type="text" id="nom" placeholder=" Votre Nom complet">



          <label for="sexe">Sexe</label>
          <select id="sexe">
            <option>M</option>
            <option>F</option>
          </select>
          <label for="nom Complet">Telephone</label>
          <input type="text" id="tel_conn" placeholder="Votre Nom complet">

          <label for="email"></label>
          <input type="email" id="email" placeholder="Votre email">

          <label for="mdp"></label>
          <input type="password" id="mdp" placeholder="Créer un mot de passe">

          <label for="confirm"></label>
          <input type="password" id="confirm" placeholder="Confirmer le mot de passe">

          <label for="date"></label>
          <input type="date" id="date" placeholder="Date de naissance">

          <button type="submit" class="btn-auth soumettre">Valider</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
