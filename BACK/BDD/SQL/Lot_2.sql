--Lot 2

--1--

SELECT nomfou, confou, numcom, produit.codart, libart
FROM produit
JOIN vente ON vente.codart = produit.codart 
JOIN fournis ON vente.numfou = fournis.numfou 
JOIN entcom ON fournis.numfou = entcom.numfou
WHERE confou = 'Hercule'

--2--

SELECT nomfou, entcom.datcom, fournis.numfou
FROM fournis
JOIN entcom ON fournis.numfou = entcom.numfou

--3--

SELECT ligcom.numcom,entcom.numfou
FROM entcom
JOIN ligcom ON ligcom.numcom = entcom.numcom 
GROUP BY numfou 

--4--

SELECT  libart, stkale, stkphy, qteann
FROM produit
WHERE stkphy >= stkale AND qteann > 1000

--5--

SELECT nomfou, vilfou, posfou
FROM fournis
WHERE 
	posfou LIKE '%75%'
	OR posfou LIKE'%78%'
	OR posfou LIKE '%92%'
	OR posfou LIKE '%77%'
ORDER BY posfou

--5.1--

SELECT nomfou, vilfou, posfou
FROM fournis
WHERE 
	posfou LIKE '%75%'
	OR posfou LIKE'%78%'
	OR posfou LIKE '%92%'
	OR posfou LIKE '%77%'
ORDER BY vilfou

--6--

SELECT ligcom.numcom,datcom
FROM ligcom
JOIN entcom ON ligcom.numcom = entcom.numcom 
WHERE datcom LIKE '%04%'
	OR datcom LIKE '%05%'

--7--

SELECT ligcom.numcom,datcom,obscom
FROM ligcom
JOIN entcom ON ligcom.numcom = entcom.numcom 
WHERE obscom LIKE '%Commande%'

--8--

SELECT entcom.numcom,qtecde
FROM entcom
JOIN ligcom ON entcom.numcom = ligcom.numcom
GROUP BY qtecde
ORDER BY qtecde DESC

--9--

SELECT entcom.numcom,qtecde
FROM entcom
JOIN ligcom ON entcom.numcom = ligcom.numcom
WHERE qtecde <= 10000 AND qtecde <1000
GROUP BY qtecde
ORDER BY qtecde DESC

--10--

SELECT fournis.nomfou,ligcom.numcom,datcom
FROM fournis 
JOIN vente ON fournis.numfou = vente.numfou
JOIN produit ON vente.codart = produit.codart
JOIN ligcom ON produit.codart = ligcom.codart 
JOIN entcom ON ligcom.numcom = entcom.numcom 

--11--