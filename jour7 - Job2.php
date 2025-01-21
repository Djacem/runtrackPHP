<?php
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie('nbvisites', $nbvisites, time() + 3600);

if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600);
    $nbvisites = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites avec Cookie</title>
</head>
<body>

    <h1>Nombre de visites : <?php echo $nbvisites; ?></h1>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>
</html>