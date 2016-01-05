@echo off

cd "C:\wamp\bin\mysql\mysql5.6.17\bin"
mysqldump --user=intranetadmin --password=intranet --databases intranet > "C:\wamp\www\Symfony\SauvegardeBDD\BDDIntranet.sql"
mysqldump --user=intranetadmin --password=intranet --databases wikinox > "C:\wamp\www\Symfony\SauvegardeBDD\BDDWiki.sql"
mysqldump --user=intranetadmin --password=intranet --databases support > "C:\wamp\www\Symfony\SauvegardeBDD\BDDSupport.sql"

mysqldump --user=intranetadmin --password=intranet --databases intranet > "C:\wamp\www\Symfony\SauvegardeBDDVersioning\BDDIntranet(%date:~0,2%-%date:~3,2%-%date:~6,4%).sql"
mysqldump --user=intranetadmin --password=intranet --databases wikinox > "C:\wamp\www\Symfony\SauvegardeBDDVersioning\BDDWiki(%date:~0,2%-%date:~3,2%-%date:~6,4%).sql"
mysqldump --user=intranetadmin --password=intranet --databases support > "C:\wamp\www\Symfony\SauvegardeBDDVersioning\BDDSupport(%date:~0,2%-%date:~3,2%-%date:~6,4%).sql"