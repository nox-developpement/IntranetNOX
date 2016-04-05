sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -E -s; -W -i %~d0\Users\t.besson\Documents\vueClients.sql > %~d0\wamp\www\Symfony\GX_DB\Clients.csv

sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -E -s; -W -i %~d0\Users\t.besson\Documents\vueClientsAdr.sql > %~d0\wamp\www\Symfony\GX_DB\ClientsAdr.csv

sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -E -s; -W -i %~d0\Users\t.besson\Documents\vueContacts.sql > %~d0\wamp\www\Symfony\GX_DB\Contacts.csv