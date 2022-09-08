--Eval SQL--

--Exo 1--

--Selection des clients Français--

SELECT CompanyName, Country, City  
FROM customers
WHERE Country = 'France';

--Exo 2--

--Liste des produits vendus par le fournisseur "Exotic Liquids"--

SELECT ProductName, CompanyName
FROM products
JOIN suppliers ON suppliers.SupplierID = products.SupplierID 
WHERE CompanyName = 'Exotic Liquids';

--Exo 3--

--Nombre de produits mis à disposition par les fournisseurs français (tri par nombre de produits décroissant)--

SELECT ProductName, CompanyName, Country, COUNT(products.SupplierID)
FROM products
JOIN suppliers ON suppliers.SupplierID = products.SupplierID 
WHERE Country = 'France'
GROUP BY CompanyName 
ORDER BY COUNT(products.SupplierID) DESC;

--Exo 4--

--Liste des clients français ayant passé plus de 10 commandes--

SELECT customers.CustomerID, CompanyName, COUNT(orders.CustomerID)
FROM customers 
JOIN orders ON orders.CustomerID = customers.CustomerID 
WHERE orders.CustomerID < 10 AND Country ='France'
GROUP BY CompanyName 
HAVING COUNT(orders.CustomerID) > 10  

--Exo 5--

--Liste des clients dont le montant cumulé de toutes les commandes passées est supérieur à 30000 €--

SELECT CompanyName, SUM(`order details`.UnitPrice*`order details`.Quantity) AS 'CA', Country
FROM customers
JOIN orders ON orders.CustomerID = customers.CustomerID
JOIN `order details` ON `order details`.OrderID = orders.OrderID 
GROUP BY CompanyName
HAVING SUM(`order details`.UnitPrice*`order details`.Quantity) > 30000
ORDER BY SUM(`order details`.UnitPrice*`order details`.Quantity) DESC;

--Exo 6--

--Liste des pays dans lesquels des produits fournis par "Exotic Liquids" ont été livrés--

SELECT customers.Country
FROM customers
JOIN orders ON orders.CustomerID = customers.CustomerID 
JOIN `order details` ON `order details`.OrderID = orders.OrderID 
JOIN products ON products.ProductID = `order details`.ProductID 
JOIN suppliers ON suppliers.SupplierID = products.SupplierID 
WHERE customers.Country IN (
		SELECT customers.Country 
		FROM customers 
		JOIN orders ON orders.CustomerID = customers.CustomerID 
		JOIN `order details` ON `order details`.OrderID = orders.OrderID 
		JOIN products ON products.ProductID = `order details`.ProductID 
		JOIN suppliers ON suppliers.SupplierID = products.SupplierID 
		WHERE suppliers.CompanyName = 'Exotic LIquids'
)
GROUP BY customers.Country;

--Exo 7--

--Chiffre d'affaires global sur les ventes de 1997--

SELECT SUM(`order details`.UnitPrice*`order details`.Quantity) AS 'CA', YEAR(orders.OrderDate) AS 'Mois'
FROM orders
JOIN `order details` ON `order details`.OrderID = orders.OrderID
WHERE orders.OrderDate LIKE '%1997%'

--Exo 8--

--Chiffre d'affaires détaillé par mois, sur les ventes de 1997--

SELECT SUM(`order details`.UnitPrice*`order details`.Quantity), MONTH (orders.OrderDate), YEAR(orders.OrderDate)
FROM orders
JOIN `order details` ON `order details`.OrderID = orders.OrderID
WHERE orders.OrderDate LIKE '%1997%' IN (
		SELECT MONTH (orders.OrderDate)
		FROM orders
		JOIN `order details` ON `order details`.OrderID = orders.OrderID 
)
GROUP BY MONTH(orders.OrderDATE);

--Exo 9--

--A quand remonte la dernière commande du client nommé "Du monde entier"--

SELECT MAX(OrderDate), CompanyName
FROM customers 
JOIN orders ON orders.CustomerID = customers.CustomerID 
WHERE CompanyName = 'Du monde entier' 

--Exo 10--

--Quel est le délai moyen de livraison en jours--

SELECT AVG(DATEDIFF(ShippedDate, OrderDate))
FROM orders

--Fin--