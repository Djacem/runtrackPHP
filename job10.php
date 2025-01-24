<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = 'SELECT * FROM salles ORDER BY Capacité ASC';
$sallesStatement = $mysqlClient->prepare($sqlQuery);
$sallesStatement->execute();
$salles = $sallesStatement->fetchAll();  
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Noms</th>
            <th>id_etage</th>
            <th>Capacité</th>
        </tr>
    </thead>
    <?php foreach ($salles as $salle): ?>
        <tbody>
        <td><?= $salle['Noms'] ?></td>
        <td><?= $salle['id_etage'] ?></td>
        <td><?= $salle['Capacité'] ?></td>
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>



