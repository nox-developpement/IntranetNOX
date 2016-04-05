
IF OBJECT_ID('Intranet_Client_Adr') IS NOT NULL
DROP VIEW Intranet_Client_Adr
GO

CREATE VIEW Intranet_Client_Adr(id,N_ClientAdr,N_Client,Tel,Fax,Email,Nom_Ville,Nom_Pays,Code_Postal)
AS SELECT ROW_NUMBER() OVER(ORDER BY a.N_Client ASC),a.N_ClientAdr,a.N_Client,a.Tel,a.Fax,a.Email,a.Nom_Ville,a.Nom_Pays,a.Code_Postal
FROM CLIENTADR a,CLIENT b
WHERE b.prospect='non' AND b.N_Client=a.N_Client
GO

SET NOCOUNT ON
SELECT id,N_ClientAdr,N_Client,Tel,Fax,Email,Nom_Ville,Nom_Pays,Code_Postal
FROM Intranet_Client_Adr
GO