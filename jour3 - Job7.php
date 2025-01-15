<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$modifiedStr = "";

for ($i = 0; $i < strlen($str); $i++) {
    if ($i == strlen($str) - 1) {
        $modifiedStr .= $str[0];
    } else {
        $modifiedStr .= $str[$i + 1];
    }
}

echo $modifiedStr;
?>