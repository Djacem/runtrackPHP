<?php
$str = "Dans l'espace, personne ne vous entend crier";

$charCount = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $charCount++;
}

echo "Le nombre de caractères dans la chaîne est : $charCount";
?>