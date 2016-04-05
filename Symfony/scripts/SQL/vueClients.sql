
IF OBJECT_ID('Intranet_Client') IS NOT NULL
DROP VIEW Intranet_Client
GO

CREATE VIEW Intranet_Client(id,N_Client,Nom_Client)
AS SELECT ROW_NUMBER() OVER(ORDER BY Nom_Client ASC),N_Client,Nom_Client
FROM CLIENT
WHERE CLIENT.Prospect='non'
GO

SET NOCOUNT ON
SELECT id,N_Client, Nom_Client 
FROM Intranet_Client
GO
