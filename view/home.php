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
      <form action="index.php?page=home&action=login" method="POST">
        <div class="formulaire">
          <label for="Numero de telephone">Numero de telephone</label>
          <input type="text" name="tel_conn" placeholder="Ecrivez ici">

          <label for="mot de passe">Mot de passe</label>
          <input type="password" name="mdp_conn" placeholder="Ecrivez ici">
          
          <button type="submit" class="btn-auth se_connecter">Se connecter</button>
        </div>
      </form>
    </div>

    <!-- Formulaire Inscription -->
    <div class="auth-box white-bg">
      <h4 class="form_enr">Crée ton compte Digiciv !</h4>
      <form action="index.php?page=home&action=register" method="POST">
        <div class="formulaire">

          <label for="nom"></label>
          <input type="text" name="nom" placeholder=" Entrez votre Nom" required>
          <label for="prenom"></label>
          <input type="text" name="prenom" placeholder=" Entrez Votre prenom" required>

          <label for="sexe">Sexe</label>
          <select name="sexe">
            <option value=""></option>
            <option  value="M">M</option>
            <option value="F">F</option>
          </select>

          <label for="email">email</label>
          <input type="email" name="email" placeholder="Entrez votre email" required>

          <label for="tel">Numero de telephone</label>
          <input type="tel" name="tel" placeholder="Entrez votre numero de telephone" required>

          <label for="Mot de passe">Mot de passe</label>
          <input type="password" name="mdp"  placeholder="Créer un mot de passe" required>

          <label for="confirm"></label>
          <input type="password" name="confirm"  placeholder="Confirmer le mot de passe" required>

          <label for="date">Date de naissance</label>
          <input type="date" name="date_naiss" placeholder="Date de naissance" required>

          <button type="submit" class="btn-auth soumettre">Valider</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
