<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery ='SELECT Noms, Capacité FROM salles';

$sallesStatement = $mysqlClient->prepare($sqlQuery);
$sallesStatement->execute();
$salles = $sallesStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Noms</th>
            <th>Capacité</th>
        </tr>
    </thead>
    <?php foreach ($salles as $salle): ?>
        <tbody>
            <td><?php echo $salle['Noms']; ?></td>
            <td><?php echo $salle['Capacité']; ?></td>
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>