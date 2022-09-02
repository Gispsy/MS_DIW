--Lot 1

--1--

SELECT * FROM hotel

--2--

SELECT cli_nom ,cli_prenom,cli_adresse 
FROM client c 
WHERE cli_id  = '4'

--3--

SELECT sta_nom,sta_altitude
FROM station s 
WHERE sta_altitude < 1000

--4--

SELECT cha_numero,cha_capacite
FROM chambre c 
WHERE cha_capacite > 1

--5--

SELECT cli_nom, cli_ville
FROM client c 
WHERE cli_ville != 'Londres'

--6--

SELECT hot_nom,hot_ville
FROM hotel h 
WHERE hot_ville = 'Bretou' AND hot_categorie > 3


--Lot 2

--7--

SELECT hot_nom,sta_nom,hot_categorie,hot_ville,hot_id
FROM hotel
JOIN station ON hot_sta_id = sta_id 

--8--

SELECT hot_nom, hot_categorie, hot_ville, cha_numero
FROM hotel 
JOIN chambre ON hot_id = cha_hot_id 

--9--

SELECT hot_nom, hot_categorie, hot_ville, cha_numero, cha_capacite
FROM hotel 
JOIN chambre ON hot_id = cha_hot_id 

--10--

SELECT cli_nom, hot_nom, res_date
FROM client 
JOIN reservation on cli_id = res_cli_id 
JOIN chambre on res_cha_id = cha_id
JOIN hotel on cha_hot_id = hot_id

--11--

SELECT sta_nom, hot_nom, cha_numero, cha_capacite
FROM chambre 
JOIN hotel ON cha_hot_id = hot_id 
JOIN station ON hot_sta_id = sta_id

--12--

SELECT cli_nom, hot_nom, res_date_debut, DATEDIFF(res_date_fin,res_date_debut)
FROM client 
JOIN reservation ON cli_id = res_cli_id 
JOIN chambre ON res_cha_id = cha_id
JOIN hotel ON cha_hot_id = hot_id

--Lot 3

--13--

SELECT hot_sta_id ,COUNT(hot_id)
FROM hotel 
JOIN station ON hot_sta_id = sta_id
GROUP BY sta_id 

--14--

SELECT cha_hot_id,COUNT(cha_hot_id)
FROM chambre 
JOIN hotel ON cha_hot_id = hot_id 
JOIN station ON hot_sta_id = sta_id 
GROUP BY sta_id

--15--

SELECT cha_hot_id,cha_capacite,sta_id,COUNT(cha_capacite)
FROM chambre 
JOIN hotel ON cha_hot_id = hot_id 
JOIN station ON hot_sta_id = sta_id 
WHERE cha_capacite > 1
GROUP BY sta_id 

--16--

SELECT cli_nom, res_cli_id,hot_nom
FROM client 
JOIN reservation ON cli_id = res_cli_id 
JOIN chambre ON res_cha_id = cha_id
JOIN hotel ON cha_hot_id = hot_id
WHERE cli_nom = 'Squire'

--17--

SELECT res_date_debut,res_date_fin,AVG(DATEDIFF(res_date_fin,res_date_debut))
FROM reservation 
JOIN chambre ON res_cha_id = cha_id 
JOIN hotel ON cha_hot_id = hot_id
JOIN station ON hot_sta_id = sta_id
GROUP BY sta_id

---FIN---

