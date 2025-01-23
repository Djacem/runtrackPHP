SELECT salles.Noms
FROM étages
JOIN salles ON salles.id 
WHERE salles.Capacité = (SELECT MAX(Capacité) FROM salles);
UPDATE salles 
SET Noms = 'Biggest Room' 
WHERE Capacité = (SELECT MAX(Capacité) FROM salles);