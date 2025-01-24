<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = '
SELECT salles.Noms AS Noms_salles, étages.Nom AS Nom_étages
FROM salles 
JOIN étages ON salles.id_etage = étages.id
';
$sallesStatement = $mysqlClient->prepare($sqlQuery);
$sallesStatement->execute();
$salles = $sallesStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Nom des salles</th>
            <th>Étage des salles</th>
        </tr>
    </thead>
    <?php foreach ($salles as $salle): ?>
        <tbody>
        <td><?= $salle['Noms_salles'] ?></td>
        <td><?= $salle['Nom_étages'] ?></td>
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>



