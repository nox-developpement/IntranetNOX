@echo off

sqlcmd -S SRVM-SQL-LAB -d NOX -i C:\wamp\www\Symfony\scripts\SQL\InsertClientAdrIntoGXDB.sql

pause