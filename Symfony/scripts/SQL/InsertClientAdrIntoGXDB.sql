SET NOCOUNT ON
GO
INSERT INTO CLIENTADR (N_Client, Tel, Fax, Email, Nom_Ville, Nom_Pays, Code_Postal, Adresse1, Adresse2, Adresse3) VALUES ($(N_Client),'$(Tel)','$(Fax)','$(Email)','$(Nom_Ville)','$(Nom_Pays)','$(Code_Postal)','$(Adresse1)','$(Adresse2)','$(Adresse3)')
GO