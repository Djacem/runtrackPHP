<?php
session_start();

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) { 
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de prénoms</title>
</head>
<body>

    <h1>Ajouter un prénom</h1>

    <form method="post">
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" required>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>$prenom</li>";
            }
        } else {
            echo "<li>Aucun prénom ajouté</li>";
        }
        ?>
    </ul>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser la liste</button>
    </form>

</body>
</html>