--Lot 3--

--1--

UPDATE 	vente
SET prix1 = prix1*0.4,
	prix2 = prix2*0.2
WHERE numfou = 9180

--2--

UPDATE vente 
SET prix2 = prix1

--3--

UPDATE entcom,fournis
SET obscom = '*****'
WHERE satisf > 5 

--4--

DELETE  FROM vente 
WHERE codart = 'I110';

DELETE FROM produit
WHERE codart = 'I110';

--Fin--