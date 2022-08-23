
--Structuration de INSERT--

INSERT INTO NOM_TABLE (NOM_COLONNE_1 [, NOM_COLONNE_2, ...])
VALUES
(VALEUR_COLONNE_1 [, VALEUR_COLONNE_2, ...])


--Affectation de valeurs

INSERT INTO Employes (emp_id, emp_matricule, emp_nom, emp_prenom, emp_dep, emp_salaire)
VALUES (1, 140, 'TIFIET', 'Tarek', 30, 2100)


--Choix des champs à renseigner

INSERT INTO Employes (emp_matricule, emp_nom, emp_prenom, emp_dep)
VALUES
(152, 'CONDA', 'Anna', 41)


--Syntaxe rapaide

INSERT INTO Employes
VALUES
(13, 567, 'BAMBEL', 'Lary', 43, Null)


--Ajout multiple

INSERT INTO Employes (emp_matricule, emp_nom, emp_prenom, emp_dep, emp_salaire)
VALUES
(666, 'FER', 'Lucie', 42, 2130),
(42, 'MATIK', 'Otto', 50, Null)

INSERT INTO fournis (numfou,nomfou,ruefou,posfou,vilfou,confou,satisf)
VALUES
(101,'Loutre','60 rue des rivières','50000','Larivière','Patou',9),
(102,'Brise','55 rue des Cuisse','69000','LaFrench','Patrick',8),
(103,'Xenos','85 avenues du temps','00000','Chrono','Horlogue',5),
(104,'Pate','65 avenues des carbo','54000','Faim','Luter',7),
(105,'Clement','Rue des meilleurs FOmrateur','XD','LaBonneBlague',10)