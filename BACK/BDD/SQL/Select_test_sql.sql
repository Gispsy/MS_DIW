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

--Pour lister tous les employés, et ajouter le nom du département dans lequel ils sont affectés s'il y en a un, on écrira :

SELECT emp_nom, emp_prenom, emp_salaire, emp_dep, dep_nom FROM Employes
LEFT JOIN Departements
ON emp_dep = dep_id;

--la clause FULL JOIN n'est pas supportée par MySQL
--Pour obtenir le résultat équivalent sur ce langage, il faut combiner soi-même le résultat d'un LEFT JOIN et d'un RIGHT JOIN, à l'aide de la clause UNION ALL.
--Celle-ci va "fusionner" deux tables contenant les mêmes colonnes, en supprimant tous les doublons trouvés.

--La syntaxe d'un équivalent de FULL JOIN avec UNION ALL pour MySQL, serait la suivante :

SELECT NOM_COLONNE_1,  NOM_COLONNE_2, ...,  NOM_COLONNE_n
FROM NOM_TABLE_1
LEFT JOIN NOM_TABLE_2 ON CUSTOMERS.NOM_COLONNE_i = NOM_TABLE_2.NOM_COLONNE_j
UNION ALL
SELECT NOM_COLONNE_1,  NOM_COLONNE_2, ...,  NOM_COLONNE_n
FROM NOM_TABLE_1
RIGHT JOIN NOM_TABLE_2 ON CUSTOMERS.NOM_COLONNE_i = NOM_TABLE_2.NOM_COLONNE_j


--Jointures multiples

Syntaxe générique :

SELECT NOM_COLONNE_1, NOM_COLONNE_2, ..., NOM_COLONNE_n
FROM NOM_TABLE_1
JOIN NOM_TABLE_2 ON NOM_TABLE_2.NOM_COLONNE_i = NOM_TABLE_1.NOM_COLONNE_j
JOIN NOM_TABLE_3 ON NOM_TABLE_3.NOM_COLONNE_x = NOM_TABLE_2.NOM_COLONNE_y
JOIN NOM_TABLE_4 ON NOM_TABLE_4.NOM_COLONNE_z = NOM_TABLE_1.NOM_COLONNE_j;


--Auto-jointure

--Pour lister les employés, et le nom de leur supérieur hiérarchique, on écrira donc :

SELECT Employes.emp_nom, Employes.emp_prenom, Superieurs.emp_nom, Superieurs.emp_prenom, 
FROM Employes
LEFT JOIN Employes AS Superieurs ON Superieurs.emp_prenom = Employes.emp_prenom
WHERE Employes.emp_nom <> Superieurs.emp_nom

--Ancienne syntaxe

--Ainsi, pour lister les employés avec le nom du département dans lequel ils sont affectés (= jointure interne), on pourrait donc voir cette requête :

SELECT emp_nom, emp_prenom, emp_salaire, emp_dep, dep_nom
FROM Employes, Departements
WHERE emp_dep = dep_id;


--La clause GROUP BY

--Par exemple, pour afficher le nombre d'employés total, on écrira :

SELECT COUNT(*) AS 'Nb employés'
FROM Employes

--Mais pour afficher le salaire moyen et le salaire minimum des employés, pour chaque département, il faudra écrire :

SELECT emp_dep, AVG(emp_salaire), MIN(emp_salaire)
FROM Employes
GROUP BY emp_dep 
--Ici alors, le calcul de la moyenne (AVG) et la sélection du salaire le plus bas (MIN) se font parmi chaque groupe d'employés regroupés par département.


--La clause HAVING

--Pour obtenir le salaire moyen et le salaire minimum des employés, pour chaque département,

--en ne ciblant que les employés ayant un n° matricule supérieur à 10,
--et pour les départements dont le salaire moyen est inférieur a 1600€,
--on écrira :

SELECT emp_dep, AVG(emp_salaire), MIN(emp_salaire)
FROM Employes
WHERE emp_matricule > 10
GROUP BY emp_dep
HAVING AVG(emp_salaire) <= 1600


--Tri d'enregistrements

--Pour lister le contenu de la table Employes, triée par n° de département décroissant, puis par nom de famille d'employé croissant, on écrira :

SELECT *
FROM Employes
ORDER BY emp_dep DESC, emp_nom ASC

-- ce qui équivaut à :
SELECT *
FROM Employes
ORDER BY emp_dep DESC, emp_nom

--De cette manière, les employés seront affichés par n° de département, avec un tri par ordre alphabétique pour chaque nouveau département.

--Cette colonne peut être spécifiée par son nom (comme dans l'exemple ci-dessus), ou par son n° d'emplacement dans le SELECT.

--Pour lister les employés avec leur nom et prénom, salaire en centimes et n° de département, triés par salaire décroissant puis par département (croissant), on écrira :

SELECT emp_nom, emp_prenom, emp_salaire * 100, emp_dep
FROM Employes
ORDER BY 3 DESC, emp_dep


--Requêtes de requêtes

--Pour afficher les informations des employés du département distribution, on pourrait écrire la requête suivante :

-- ceci est notre requête "principale" :
SELECT emp_nom, emp_prenom, emp_poste
   FROM employes
   WHERE emp_dep IN (
      -- ceci est notre sous-requête :
      SELECT dep_id
      FROM Departements
      WHERE dep_nom = 'distribution'
   )

   --Supposons que nous cherchions, parmi les employés, quels sont ceux qui gagnent moins que le salaire moyen de tous les employés de l'entreprise

   --Nous avons donc dans un premier temps, besoin de calculer le salaire moyen ; cela nous demandera une requête.
--Puis, il nous faudra extraire tous les employés dont le salaire est inférieur au résultat trouvé.

--Hop, notre requête imbriquée sera la suivante :

SELECT emp_nom, emp_prenom, emp_salaire 
FROM employes
WHERE emp_salaire < (
   -- sous-requête pour calculer le salaire moyen : 
   SELECT AVG(emp_salaire)
   FROM employes
)
ORDER BY emp_salaire DESC

--Travaillons le mal de tête une dernière fois, en affichant pour ces employés, l'écart (en euros) entre leur salaire et ce salaire moyen :

SELECT emp_nom, emp_prenom, emp_salaire, ROUND(calcul.moyenne - emp_salaire) AS `Ecart moyenne`

FROM employes, (
   -- sous-requête : 
   SELECT AVG(emp_salaire) AS moyenne
   FROM employes
) AS `calcul`

WHERE emp_salaire < calcul.moyenne
ORDER BY emp_salaire DESC;