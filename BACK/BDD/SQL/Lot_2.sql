--Lot 2

--1--

SELECT nomfou, confou, numcom, produit.codart, libart
FROM produit
JOIN vente ON vente.codart = produit.codart 
JOIN fournis ON vente.numfou = fournis.numfou 
JOIN entcom ON fournis.numfou = entcom.numfou
WHERE confou = 'Hercule'

--2--

