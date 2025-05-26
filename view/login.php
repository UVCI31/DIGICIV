<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body>
    <h1>Connexion</h1>

    <?php if (!empty($error)) : ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST" action="index.php?page=user&action=login">
        <label>Nom d'utilisateur : <input type="text" name="username"></label><br>
        <label>Mot de passe : <input type="password" name="password"></label><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>