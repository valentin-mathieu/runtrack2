SELECT etage.nom, salles.nom AS 'Biggest Room', salles.capacite FROM etage, salles WHERE salles.capacite=(SELECT MAX(capacite) FROM salles) AND etage.id = salles.id_etage
