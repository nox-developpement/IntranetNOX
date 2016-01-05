@echo off

cd "C:\wamp\bin\mysql\mysql5.6.17\bin"

if not exist C:/wamp/www/Symfony/SauvegardeBDD/BDDSupport.sql (
	echo Le fichier est introuvable ! 
	pause
)

if not exist C:/wamp/www/Symfony/SauvegardeBDD/BDDWiki.sql (
	echo Le fichier est introuvable ! 
	pause
)

if not exist C:/wamp/www/Symfony/SauvegardeBDD/BDDIntranet.sql (
	echo Le fichier est introuvable ! 
	pause
)

mysql -u intranetadmin --password=intranet -D intranet < C:/wamp/www/Symfony/SauvegardeBDD/BDDIntranet.sql
if NOT ["%errorlevel%"]==["0"] pause
mysql -u intranetadmin --password=intranet -D wikinox < C:/wamp/www/Symfony/SauvegardeBDD/BDDWiki.sql
if NOT ["%errorlevel%"]==["0"] pause
mysql -u intranetadmin --password=intranet -D support < C:/wamp/www/Symfony/SauvegardeBDD/BDDSupport.sql
if NOT ["%errorlevel%"]==["0"] pause