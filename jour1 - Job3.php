<?php
$booleanVar = true;
$intVar = 42;
$stringVar = "LaPlateforme";
$floatVar = 3.14;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types de variables en PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid black;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Affichage des types de variables en PHP</h2>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($booleanVar); ?></td>
                <td>booleanVar</td>
                <td><?php echo $booleanVar ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($intVar); ?></td>
                <td>intVar</td>
                <td><?php echo $intVar; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($stringVar); ?></td>
                <td>stringVar</td>
                <td><?php echo $stringVar; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($floatVar); ?></td>
                <td>floatVar</td>
                <td><?php echo $floatVar; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>