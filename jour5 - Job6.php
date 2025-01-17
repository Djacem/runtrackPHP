<?php
function leetSpeak($str) {
    $replacements = [
        'a' => '4', 'A' => '4',
        'e' => '3', 'E' => '3',
        'l' => '1', 'L' => '1',
        'o' => '0', 'O' => '0',
        's' => '5', 'S' => '5',
        't' => '7', 'T' => '7'
    ];

    return strtr($str, $replacements);
}

$str = "Bonjour tout le monde";
$leetStr = leetSpeak($str);

echo "Leet Speak: " . $leetStr;
?>