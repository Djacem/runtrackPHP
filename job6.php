<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = 'SELECT MAX(ID) AS ID FROM étudiants;';
$étudiantsStatement = $mysqlClient->prepare($sqlQuery);
$étudiantsStatement->execute();
$étudiants = $étudiantsStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Nombre d'étudiants</th>

        </tr>
    </thead>
    <?php foreach ($étudiants as $étudiant): ?>
        <tbody>
            <td><?= $étudiant['ID'] ?></td>

        </tbody>
    <?php endforeach ?>
    </tbody>
</table>

