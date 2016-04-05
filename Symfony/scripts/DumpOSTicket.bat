cd "%~d0\wamp\bin\mysql\mysql5.6.17\bin"
mysqldump -h 192.168.30.10 --user=root --all-databases> "%~d0\wamp\www\Symfony\SauvegardeBDD\BDDOSTicket.sql"