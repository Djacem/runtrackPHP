<?php
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    $prenom = '';
}

if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
} else {
    $prenom = '';
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600);
    $prenom = $_POST['prenom'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>

<?php
if (!empty($prenom)) {
    echo "<h1>Bonjour $prenom !</h1>";
    echo '<form method="post">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
    echo '<h1>Connexion</h1>';
    echo '<form method="post">
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom" required>
            <button type="submit">Connexion</button>
          </form>';
}
?>

</body>
</html>