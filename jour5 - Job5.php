<?php
function occurrences($str, $char) {
    return substr_count($str, $char);
}

$str = "Bonjour";
$char = "o";

$resultat = occurrences($str, $char);
echo "Le caractère '$char' apparaît $resultat fois dans la chaîne '$str'.";
?>