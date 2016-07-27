SET NOCOUNT ON
INSERT INTO Contact (N_Client, Nom_Contact, Prenom_Contact, Titre, Nom_Ville, Nom_Pays, Code_Postal, Ligne_Directe, Portable, Fax) VALUES (23866, 'Tristan', 'Besson Jacobs', 'Monsieur', 'Paris', 'France', '75000', '0356985696', '0635256212', '0325456521');
SELECT SCOPE_IDENTITY();
GO