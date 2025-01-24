<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = 'SELECT Prénom,Nom,Naissance FROM étudiants WHERE Sexe="Femme";';
$étudiantsStatement = $mysqlClient->prepare($sqlQuery);
$étudiantsStatement->execute();
$étudiants = $étudiantsStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
        </tr>
    </thead>
    <?php foreach ($étudiants as $étudiant): ?>
        <tbody>
            <td><?= $étudiant['Nom'] ?></td>
            <td><?= $étudiant['Prénom'] ?></td>
            <td><?= $étudiant['Naissance'] ?></td>
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>

