<?php
echo "Nombre d'arguments GET : " . count($_GET) . "<br>";

if(count($_GET) > 0) {
    echo "<ul>";
    foreach ($_GET as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun argument GET n'a été passé.";
}
?>