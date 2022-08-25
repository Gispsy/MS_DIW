-- clauses obligatoires :
SELECT      NOM_COLONNE_1 [, NOM_COLONNE_2, ..., NOM_COLONNE_n]
FROM        NOM_TABLE_1
-- clauses optionnelles (selon besoins)
JOIN        NOM_TABLE_2 ON NOM_TABLE_1.CLE_PRIMAIRE = NOM_COLONNE_2.CLE_ETRANGERE
WHERE       < CONDITIONS_FILTRE >
GROUP BY    < NOM_COLONNE_REGROUPEMENT_1 [, NOM_COLONNE_REGROUPEMENT_2, ...] >
HAVING      < CONDITIONS_FILTRE_POUR_FONCTIONS_AGREGEES >
ORDER BY    NOM_COLONNE_TRI_1 [, NOM_COLONNE_TRI_2, ...]
LIMIT       < NOMBRE_ENREGISTREMENTS >



--Selection dans les colonnes

SELECT UPPER(emp_nom), ROUND(emp_salaire * 100, 0), 'centimes'
FROM Employes

SELECT UPPER(emp_nom) AS 'NOM employé', ROUND(emp_salaire * 100, 0) AS 'Salaire', 'centimes' AS 'Unité salaire'
FROM Employes

--FIltrage d'enregistrements

SELECT DISTINCT emp_poste FROM Employes

SELECT DISTINCT emp_dep, emp_poste FROM Employes

--Opérateur conditionnels

--Par exemple, pour rechercher dans la table Employes, les salariés qui travaillent dans le département 40 ou un département plus élevé, on notera :

SELECT *
FROM Employes
WHERE emp_dep >= 40;

--Opérateur BETWEEN

--Pour lister le prénom et le nom des employés dont le salaire est compris entre 20000 et 30000 euros, on peut écrire :

SELECT emp_prenom, emp_nom FROM Employes
WHERE emp_salaire BETWEEN 2000 AND 3000

--Ce qui revient à écrire :

SELECT emp_prenom, emp_nom FROM Employes
WHERE emp_salaire >= 2000 AND emp_salaire <= 3000

--Opérateur IN

--Pour afficher les salariés des départements de la finance, dans les ateliers ou dans l'administration, on écrira :

SELECT *
FROM Employes
WHERE emp_dep IN (10, 30, 50);

--Opérateur LIKE

--Pour retrouver les salariés qui ont un poste de directeur, on notera :

SELECT *
FROM Employes
WHERE emp_poste LIKE 'dir.%';

--Pour lister les employés dont le nom commence par la lettre "F", il nous faudra écrire :

SELECT * FROM Employes
WHERE emp_nom LIKE 'F%'

--Pour extraire tous les salariés dont le salaire n'est pas renseigné, on écrira :

SELECT *
FROM Employes
WHERE emp_salaire IS NULL;

--Et pour faire ressortir tous les salariés qui dépendent d'un supérieur hiérarchique, on écrira :

SELECT *
FROM Employes
WHERE emp_sup IS NOT NULL;

--Condition de recherche combinée 

--Ainsi, pour trouver les employés dont le matricule est supérieur à 110, et dont le salaire est égal à 1300€, on écrira :

SELECT emp_nom, emp_matricule
FROM Employes
WHERE emp_matricule > 110 AND emp_salaire = 1300;

--Priorisation des tests 

--Prenons le cas où il faudrait extraire les employés dont le matricule est inférieur ou égal à 115, et dont le salaire est égal à 2250€ ou 2300€.

--Si l'on écrit la requête suivante :

SELECT *
FROM Employes
WHERE emp_embauche >= '2001-01-01' AND emp_salaire = 2250 OR emp_salaire = 2300;
--L'instruction nous renverra un mauvais résultat, car le serveur effectue ses tests (comparaison de valeurs 2 par 2) de gauche à droite :

--emp_embauche > '2000-12-31' : sélectionne tous les salariés embauchés à partir du 01/01/2001
--[résultat_précédent] AND emp_salaire = 2250 : sélectionne tous ceux embauchés à partir du 01/01/2001 et qui gagnent 2250€
--[résultat_précédent] OR emp_salaire = 2300 : sélectionne tous ceux embauchés à partir du 01/01/2001 et qui gagnent 2250€, OU tous ceux qui gagnent 2300€ (même s'ils ont été embauchés avant le 01/01/2001 !)

--Liaison de tables 

--Syntaxe générique :

SELECT NOM_COLONNE_1, NOM_COLONNE_2, ..., NOM_COLONNE_n
FROM NOM_TABLE_1
JOIN NOM_TABLE_2 ON NOM_TABLE_2.CLE_ETRANGERE = NOM_TABLE_1.CLE_PRIMAIRE;

--Jointures internes : INNER JOIN

--Pour lister les employés avec le nom du département dans lequel ils sont affectés, on écrira :

SELECT emp_nom, emp_prenom, emp_salaire, emp_dep, dep_nom
FROM Employes
INNER JOIN Departements ON emp_dep = dep_id;

-- équivaut à :
SELECT emp_nom, emp_prenom, emp_salaire, emp_dep, dep_nom
FROM Employes
JOIN Departements ON emp_dep = dep_id;

--Jointures externes : OUTER JOIN

