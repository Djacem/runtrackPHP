SELECT salles.Noms AS Noms_salles, étages.Nom AS Nom_étages 
-- On se position sur la colonne Noms de la table salles 
-- AS permet d'ajouter un alias à une colonne ou à une table.
-- On se position sur la colonne Nom de la table étages
FROM salles 
-- Indique que la tables principale est salles.
JOIN étages ON  étages.id;
-- JOIN ON permet de joindre les deux tables en fonction du critère indiqué. Ici on utilise l'id des tables pour faire le lien entre elles.
