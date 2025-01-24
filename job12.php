

<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());}
$sqlQuery = 'SELECT Prénom,Nom,Naissance,Sexe,EMAIL FROM étudiants WHERE Naissance > "1998-01-01" AND Naissance < "2018-01-01" ;';
$étudiantsStatement = $mysqlClient->prepare($sqlQuery);
$étudiantsStatement->execute();
$étudiants = $étudiantsStatement->fetchAll();
?>
<table border="2" cellpadding="5 cellspacing="0">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <?php foreach ($étudiants as $étudiant): ?>
        <tbody>
            <td><?= $étudiant['Prénom'] ?></td>
            <td><?= $étudiant['Nom'] ?></td>
            <td><?= $étudiant['Sexe'] ?></td>
            <td><?= $étudiant['EMAIL'] ?></td>
        </tbody>
    <?php endforeach ?>
    </tbody>
</table>

