<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenue, <?= htmlspecialchars($_SESSION['user'] ?? 'invité') ?></h1>
    <p><a href="index.php?page=user&action=logout">Se déconnecter</a></p>
</body>
</html>