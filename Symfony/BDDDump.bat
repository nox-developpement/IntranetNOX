@echo off

cd "C:\wamp\bin\mysql\mysql5.6.17\bin"
mysqldump --user=intranetadmin --password=intranet --databases intranet --default-character-set=utf8 --result-file="C:\wamp\www\Symfony\SauvegardeBDD\BDDIntranet.sql"
mysqldump --user=intranetadmin --password=intranet --databases wikinox --default-character-set=utf8 --result-file="C:\wamp\www\Symfony\SauvegardeBDD\BDDWiki.sql"
mysqldump --user=intranetadmin --password=intranet --databases support --default-character-set=utf8 --result-file="C:\wamp\www\Symfony\SauvegardeBDD\BDDSupport.sql"

mysqldump --user=intranetadmin --password=intranet --databases intranet --default-character-set=utf8 --result-file="C:\wamp\www\Symfony\SauvegardeBDDVersioning\BDDIntranet%date:~0,2%%date:~3,2%%date:~6,4%.sql"
mysqldump --user=intranetadmin --password=intranet --databases wikinox --default-character-set=utf8 --result-file="C:\wamp\www\Symfony\SauvegardeBDDVersioning\BDDWiki%date:~0,2%%date:~3,2%%date:~6,4%.sql"
mysqldump --user=intranetadmin --password=intranet --databases support --default-character-set=utf8 --result-file="C:\wamp\www\Symfony\SauvegardeBDDVersioning\BDDSupport%date:~0,2%%date:~3,2%%date:~6,4%.sql"

forfiles /p "C:\wamp\www\Symfony\SauvegardeBDDVersioning" /s /d -30 /c "cmd /c del @file : date >= 31 days >NUL" 

pause