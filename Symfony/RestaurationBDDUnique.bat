@echo off

cd "C:\wamp\bin\mysql\mysql5.6.17\bin"

set /p bdd= Veuillez entrer le nom de la base de données : 

set /p chemin= Veuillez entrer le chemin du fichier : 

if not exist C:/wamp/www/Symfony/SauvegardeBDDVersioning/%chemin%.sql (
	echo Le fichier est introuvable ! 
	pause
)

mysql -u intranetadmin --password=intranet -D %bdd% < C:/wamp/www/Symfony/SauvegardeBDDVersioning/%chemin%.sql

if NOT ["%errorlevel%"]==["0"] pause