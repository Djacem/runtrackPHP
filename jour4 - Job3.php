<?php
echo "Nombre d'arguments POST : " . count($_POST) . "<br>";

if(count($_POST) > 0) {
    echo "<ul>";
    foreach ($_POST as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun argument POST n'a été passé.";
}
?>