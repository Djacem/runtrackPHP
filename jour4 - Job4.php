<?php
if (!empty($_POST)) {
    echo "<h2>Liste des arguments POST</h2>";
    echo "<table border='1' style='border-collapse: collapse;'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Aucun argument POST n'a été passé.";
}
?>