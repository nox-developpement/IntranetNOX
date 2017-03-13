sqlcmd -h-1 -S SRV-NOX35-APPLI\EVERWIN -d NOX -U NOXGXreader -P NOX35GXreader -s; -W -i %~d0\wamp\www\Symfony\scripts\SQL\getAffaires.sql -o %~d0\wamp\www\Symfony\web\DatabasesCSV\Affaires.csv

pause