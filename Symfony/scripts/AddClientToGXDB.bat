@echo off

set Nom_Client=%1

sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -i %~d0\wamp\www\Symfony\scripts\SQL\InsertClientIntoGXDB.sql -v Nom_Client = %Nom_Client%