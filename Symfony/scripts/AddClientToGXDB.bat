@echo off

sqlcmd -h-1 -S SRVM-SQL-LAB -d NOX -i %~d0\wamp\www\Symfony\scripts\SQL\InsertClientIntoGXDB.sql