@echo off

cd "%~d0\wamp\bin\mysql\mysql5.6.17\bin"
mysqldump --user=intranetadmin --password=intranet --databases intranet --default-character-set=utf8 --result-file="%~d0\wamp\www\Symfony\SauvegardeBDD\BDDIntranet.sql"
mysqldump --user=intranetadmin --password=intranet --databases wikinox --default-character-set=utf8 --result-file="%~d0\wamp\www\Symfony\SauvegardeBDD\BDDWiki.sql"
mysqldump --user=intranetadmin --password=intranet --databases support --default-character-set=utf8 --result-file="%~d0\wamp\www\Symfony\SauvegardeBDD\BDDSupport.sql"