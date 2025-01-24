<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = 'SELECT SUM(Supérficie) AS superficie_totale FROM étages';
$étagesStatement = $mysqlClient->prepare($sqlQuery);
$étagesStatement->execute();
$étages = $étagesStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Superficie Totale</th>
        </tr>
    </thead>
    <?php foreach ($étages as $étage): ?>
        <tbody>
        <td><?= $étage['superficie_totale'] ?></td>
            
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>



