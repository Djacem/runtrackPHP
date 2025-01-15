<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = array(
    'voyelles' => 0,
    'consonnes' => 0
);

$vowels = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    if (in_array($char, $vowels)) {
        $dic['voyelles']++;
    }
    elseif (ctype_alpha($char)) {
        $dic['consonnes']++;
    }
}

echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic['voyelles'] . "</td><td>" . $dic['consonnes'] . "</td></tr></tbody>";
echo "</table>";
?>