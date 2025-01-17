<?php
function gras($str) {
    $words = explode(" ", $str);
    foreach ($words as $key => $word) {
        if (ctype_upper($word[0])) {
            $words[$key] = "<b>" . $word . "</b>";
        }
    }
    return implode(" ", $words);
}

function cesar($str, $shift = 2) {
    $result = "";
    $str = str_split($str);
    
    foreach ($str as $char) {
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            if (ctype_upper($char)) {
                $char = chr((($ascii - 65 + $shift) % 26) + 65);
            }
            elseif (ctype_lower($char)) {
                $char = chr((($ascii - 97 + $shift) % 26) + 97);
            }
        }
        $result .= $char;
    }
    return $result;
}

function plateforme($str) {
    $words = explode(" ", $str);
    foreach ($words as $key => $word) {
        if (substr($word, -2) == "me") {
            $words[$key] = $word . "_";
        }
    }
    return implode(" ", $words);
}

if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $transformation = $_POST['transformation'];

    if ($transformation == "gras") {
        $result = gras($str);
    } elseif ($transformation == "cesar") {
        $result = cesar($str);
    } elseif ($transformation == "plateforme") {
        $result = plateforme($str);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de texte</title>
</head>
<body>

    <h1>Formulaire de transformation de texte</h1>
    <form method="post">
        <label for="str">Entrez une chaîne de caractères :</label>
        <input type="text" name="str" id="str" required>
        <br><br>

        <label for="transformation">Choisissez une transformation :</label>
        <select name="transformation" id="transformation" required>
            <option value="gras">Gras (Mots commençant par une majuscule)</option>
            <option value="cesar">César (Décalage de caractères)</option>
            <option value="plateforme">Plateforme (Ajout d'un underscore aux mots finissant par "me")</option>
        </select>
        <br><br>

        <button type="submit" name="submit">Appliquer</button>
    </form>

    <br>
    <?php
    if (isset($result)) {
        echo "<h2>Résultat de la transformation :</h2>";
        echo "<p>$result</p>";
    }
    ?>

</body>
</html>