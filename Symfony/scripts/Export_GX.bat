sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -E -s; -W -i %~d0\wamp\www\Symfony\scripts\SQL\vueClients.sql > %~d0\wamp\www\Symfony\GX_DB\Clients.csv

sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -E -s; -W -i %~d0\wamp\www\Symfony\scripts\SQL\vueClientsAdr.sql > %~d0\wamp\www\Symfony\GX_DB\ClientsAdr.csv

sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -E -s; -W -i %~d0\wamp\www\Symfony\scripts\SQL\vueContacts.sql > %~d0\wamp\www\Symfony\GX_DB\Contacts.csv

cd %~d0\wamp\bin\mysql\mysql5.6.17\bin

set scriptfile=%~d0\wamp\www\Symfony\scripts\SQL\importGXData.sql

@echo LOAD DATA LOCAL INFILE '%~d0/wamp/www/Symfony/GX_DB/Clients.csv' > %scriptfile%
@echo INTO TABLE AA_Client >> %scriptfile%
@echo FIELDS TERMINATED BY ';' >> %scriptfile%
@echo LINES TERMINATED BY '\n'; >> %scriptfile%

@echo LOAD DATA LOCAL INFILE '%~d0/wamp/www/Symfony/GX_DB/ClientsAdr.csv' >> %scriptfile%
@echo INTO TABLE AA_Client_Adr >> %scriptfile%
@echo FIELDS TERMINATED BY ';' >> %scriptfile%
@echo LINES TERMINATED BY '\n'; >> %scriptfile%

@echo LOAD DATA LOCAL INFILE '%~d0/wamp/www/Symfony/GX_DB/Contacts.csv' >> %scriptfile%
@echo INTO TABLE AA_Contact >> %scriptfile%
@echo FIELDS TERMINATED BY ';' >> %scriptfile%
@echo LINES TERMINATED BY '\n'; >> %scriptfile%

mysql -u intranetadmin --password=intranet -D intranet < %scriptfile%

pause