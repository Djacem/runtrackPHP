<?php
if (!empty($_GET)) {
    echo "<h2>Liste des arguments GET</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_GET as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Aucun argument GET n'a été passé.";
}
?>