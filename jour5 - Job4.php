<?php
function calcule($num1, $operation, $num2) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erreur : Division par zéro";
            }
        case '%':
            if ($num2 != 0) {
                return $num1 % $num2;
            } else {
                return "Erreur : Division par zéro";
            }
        default:
            return "Opération invalide";
    }
}

$resultat = calcule(10, '+', 5);
echo "Résultat : " . $resultat . "<br>";

$resultat = calcule(10, '/', 0);
echo "Résultat : " . $resultat . "<br>";
?>