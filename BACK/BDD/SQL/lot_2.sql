--Lot 2--

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

SELECT fournis.nomfou, produit.codart, libart, entcom.numcom, obscom,priuni*qteliv
FROM fournis 
JOIN vente ON fournis.numfou = vente.numfou 
JOIN produit ON vente.codart = produit.codart
JOIN ligcom ON produit.codart = ligcom.codart 
JOIN entcom ON entcom.numcom = ligcom.numcom
WHERE obscom = 'Commande urgente'
GROUP BY nomfou

--12--

SELECT nomfou, satisf, COUNT(codart)
FROM fournis
JOIN vente ON fournis.numfou = vente.numfou 
WHERE satisf >= '7'
GROUP BY nomfou

--12.2--

SELECT nomfou, satisf, COUNT(codart)
FROM fournis
JOIN vente ON fournis.numfou = vente.numfou 
WHERE satisf IN (
		SELECT satisf
		FROM fournis
		WHERE satisf > '7'
);

--13--

SELECT nomfou, entcom.numfou, numcom, datcom
FROM fournis 
JOIN entcom ON entcom.numfou = fournis.numfou 
WHERE entcom.numfou = '120';

--13.1--

SELECT nomfou, numcom, datcom
FROM fournis 
JOIN entcom ON entcom.numfou = fournis.numfou 
WHERE fournis.numfou IN (
		SELECT fournis.numfou
		FROM fournis 
		JOIN entcom ON entcom.numfou = fournis.numfou 
		WHERE entcom.numcom = '70210'
);

--14--

SELECT vente.codart,libart, prix1
FROM vente 
JOIN produit ON produit.codart = vente.codart 
WHERE libart IN(
		SELECT libart 
		FROM vente
		JOIN produit ON produit.codart = vente.codart 
		WHERE libart LIKE '%r%'
)
GROUP BY prix1 > 'r'

--15--

SELECT nomfou, stkale, produit.codart
FROM fournis
JOIN vente ON vente.numfou = fournis.numfou 
JOIN produit ON produit.codart = vente.codart 
WHERE stkphy <= stkale * 1.5
GROUP BY stkale

--16--

SELECT nomfou, stkale, produit.codart, DATEDIFF(ligcom.derliv, datcom) <= 30
FROM fournis
JOIN vente ON vente.numfou = fournis.numfou 
JOIN produit ON produit.codart = vente.codart 
JOIN ligcom ON ligcom.codart = produit.codart 
JOIN entcom ON entcom.numcom =ligcom.numcom 
WHERE stkphy <= stkale * 1.5
GROUP BY stkale


--17--

SELECT nomfou, fournis.numfou, COUNT(stkphy) 
FROM fournis
JOIN vente ON vente.numfou = fournis.numfou 
JOIN produit ON produit.codart = vente.codart 
GROUP BY nomfou
ORDER BY nomfou DESC

--18--

SELECT libart, qtecde, qteann, datcom
FROM produit 
JOIN ligcom ON ligcom.codart = produit.codart 
JOIN entcom ON entcom.numcom = ligcom.numcom 
WHERE qteann*0.9 > qtecde AND datcom LIKE ('%2020-12%')
									OR datcom Like ('%2019-12%')
									OR datcom LIKE ('%2018-12%')
GROUP BY libart

--18.1--

SELECT libart, qtecde, qteann, MONTH( datcom )
FROM produit 
JOIN ligcom ON ligcom.codart = produit.codart 
JOIN entcom ON entcom.numcom = ligcom.numcom 
WHERE qteann*0.9 > qtecde
		AND MONTH(datcom) = 12
GROUP BY libart;

--18.2--

SELECT libart, qtecde, qteann, MONTH( datcom )
FROM produit 
JOIN ligcom ON ligcom.codart = produit.codart 
JOIN entcom ON entcom.numcom = ligcom.numcom 
WHERE qteann*0.9 > qtecde
		AND MONTH(datcom) LIKE ('%12%')
				OR MONTH(datcom) LIKE ('%11%')
				OR MONTH(datcom) LIKE ('%10%')
GROUP BY libart;

--19--

SELECT nomfou, qte1*prix1*0.2 + qte2*prix2*0.2 + qte3*prix3*0.2, YEAR (derliv)
FROM fournis 
JOIN vente ON vente.numfou = fournis.numfou 
JOIN produit ON produit.codart = vente.codart 
JOIN ligcom ON ligcom.codart = produit.codart 
WHERE YEAR (derliv) = 2018
GROUP BY nomfou;

--Fin--