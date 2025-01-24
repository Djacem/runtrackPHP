<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = 'SELECT	AVG(Capacité) AS capacité_moyenne FROM `salles`';
$sallesStatement = $mysqlClient->prepare($sqlQuery);
$sallesStatement->execute();
$salles = $sallesStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Capacité moyenne totale</th>
        </tr>
    </thead>
    <?php foreach ($salles as $salle): ?>
        <tbody>
        <td><?= $salle['capacité_moyenne'] ?></td>
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>



