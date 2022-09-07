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

