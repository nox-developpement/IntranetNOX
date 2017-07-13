@echo off

cd "%~d0\wamp\bin\mysql\mysql5.7.14\bin"

if not exist %~d0/wamp/www/Symfony/SauvegardeBDD/BDDSupport.sql (
	echo Le fichier est introuvable ! 
	pause
)

if not exist %~d0/wamp/www/Symfony/SauvegardeBDD/BDDWiki.sql (
	echo Le fichier est introuvable ! 
	pause
)

if not exist %~d0/wamp/www/Symfony/SauvegardeBDD/BDDIntranet.sql (
	echo Le fichier est introuvable ! 
	pause
)

mysql -u intranetadmin --password=intranet -D intranet < %~d0/wamp/www/Symfony/SauvegardeBDD/BDDIntranet.sql
if NOT ["%errorlevel%"]==["0"] pause
mysql -u intranetadmin --password=intranet -D wikinox < %~d0/wamp/www/Symfony/SauvegardeBDD/BDDWiki.sql
if NOT ["%errorlevel%"]==["0"] pause
mysql -u intranetadmin --password=intranet -D support < %~d0/wamp/www/Symfony/SauvegardeBDD/BDDSupport.sql
if NOT ["%errorlevel%"]==["0"] pause