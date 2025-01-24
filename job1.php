<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = 'SELECT * FROM étudiants';
$étudiantsStatement = $mysqlClient->prepare($sqlQuery);
$étudiantsStatement->execute();
$étudiants = $étudiantsStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Email</th>
        </tr>
    </thead>
    <?php foreach ($étudiants as $étudiant): ?>
        <tbody>
            <td><?= $étudiant['Nom'] ?></td>
            <td><?= $étudiant['Prénom'] ?></td>
            <td><?= $étudiant['Naissance'] ?></td>
            <td><?= $étudiant['EMAIL'] ?></td>
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>

