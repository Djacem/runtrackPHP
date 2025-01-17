<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
} else {
    echo "Aucun nombre n'a été soumis.";
}
?>