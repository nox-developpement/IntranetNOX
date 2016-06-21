sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -E -s; -W -i %~d0\wamp\www\Symfony\scripts\SQL\getAffaires.sql > %~d0\wamp\www\Symfony\GX_DB\Affaires.csv

pause