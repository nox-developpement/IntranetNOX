@echo off
set AdresseIP=testIp
set Imprimante=KLM
set Nom=testReseau
set Pilote=testChemin
set fileLPR=testLPR
echo Creation d'un port d'impression TCP/IP a l'adresse %AdresseIP%
set CLEPORT='HKLM\System\CurrentControlSet\Control\Print\Monitors\Standard TCP/IP Port\Ports'
REG ADD %CLEPORT%\TCP_%AdresseIP% /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v Protocol /t REG_DWORD /d 0x00000002 /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v Version /t REG_DWORD /d 0x00000001 /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v HostName /t REG_SZ /d "" /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v IPAddress /t REG_SZ /d %AdresseIP% /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v PortMonMibPortIndex /t REG_DWORD /d 0x00000001 /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v HWAddress /t REG_SZ /d "" /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v PortNumber /t REG_DWORD /d 0x00000203 /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v "SNMP Community" /t REG_SZ /d Public /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v "SNMP Enabled" /t REG_DWORD /d 0x00000000 /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v "SNMP Index" /t REG_DWORD /d 0x00000001 /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v Queue /t REG_SZ /d %fileLPR% /f > NUL
REG ADD %CLEPORT%\TCP_%AdresseIP% /v "Double Spool" /t REG_DWORD /d 0x00000000 /f > NUL
net stop spooler
net start spooler
echo Installation de l'imprimante %Nom% sur le port TCP_%AdresseIP%. Veuillez patienter...
rundll32 printui.dll,PrintUIEntry /if /f "%Pilote%" /b "%Nom%" /r TCP_%AdresseIP% /m "%Imprimante%"