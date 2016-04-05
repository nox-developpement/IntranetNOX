
IF OBJECT_ID('Intranet_Contact') IS NOT NULL
DROP VIEW Intranet_Contact
GO

CREATE VIEW Intranet_Contact(id,N_Contact,N_Client,Nom_Contact,Prenom_Contact,Titre,Nom_Ville,Nom_Pays,Code_Postal,Ligne_Directe,Portable,Fax)
AS SELECT ROW_NUMBER() OVER(ORDER BY a.Nom_Contact,a.Prenom_Contact ASC),a.N_Contact,a.N_Client,a.Nom_Contact,a.Prenom_Contact,a.Titre,a.Nom_Ville,a.Nom_Pays,a.Code_Postal,a.Ligne_Directe,a.Portable,a.Fax
FROM Contact a, Client b
WHERE b.Prospect='non' AND b.N_Client=a.N_Client
GO

SET NOCOUNT ON
SELECT id,N_Contact,N_Client,Nom_Contact,Prenom_Contact,Titre,Nom_Ville,Nom_Pays,Code_Postal,Ligne_Directe,Portable,Fax
FROM Intranet_Contact
GO
