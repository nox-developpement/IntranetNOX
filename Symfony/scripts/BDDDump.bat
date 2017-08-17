@echo off


:: Reglage de la localisation de la date au format yyyy/mm/dd.
for /f "skip=1 delims=." %%d in ('wmic os get LocalDateTime ^| findstr .') do set "timestamp=%%d"

:: Déclaration des variables de la date courante.
set year=%timestamp:~0,4%
set month=%timestamp:~4,2%
set day=%timestamp:~6,2%

:: On rentre dans le dossier mysql pour pouvoir utilser les commandes mysql.
cd "%~d0\wamp\bin\mysql\mysql5.6.17\bin"


:: Extraction des bases de données au format .sql.
echo Extraction des bases de données...
mysqldump --user=intranetadmin --password=intranet --databases intranet --default-character-set=utf8 --result-file="%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\BDD[Intranet][%day%-%month%-%year%].sql"
mysqldump --user=intranetadmin --password=intranet --databases wikinox --default-character-set=utf8 --result-file="%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\BDD[Wiki][%day%-%month%-%year%].sql"
mysqldump --user=intranetadmin --password=intranet --databases support --default-character-set=utf8 --result-file="%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\BDD[Support][%day%-%month%-%year%].sql"

:: Compression des base de données en .zip.
echo Compression des bases de données...
7z a -tzip "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Intranet\%year%\%month%\BDD[Intranet][%day%-%month%-%year%].zip" "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\BDD[Intranet][%day%-%month%-%year%].sql" -mm=LZMA -mx=9 -sdel
7z a -tzip "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Wiki\%year%\%month%\BDD[Wiki][%day%-%month%-%year%].zip" "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\BDD[Wiki][%day%-%month%-%year%].sql" -mm=LZMA -mx=9 -sdel
7z a -tzip "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Support\%year%\%month%\BDD[Support][%day%-%month%-%year%].zip" "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\BDD[Support][%day%-%month%-%year%].sql" -mm=LZMA -mx=9 -sdel


:: Récupération de la date du dernier jour du mois courant dans la variable %errorlevel%.
call :DaysOfMonth %year% %month%
set lastDayOfMonth=%errorlevel%

:: Si la date du jour correspond au dernier jour du mois...
if NOT %day% == %lastDayOfMonth% (
	:: On supprime toutes les sauvegardes du mois sauf la dernière.
	echo Nettoyage des dossiers de sauvegarde...
	for /f "skip=1 eol=: delims=" %%F in ('dir /b /o-d "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Intranet\%year%\%month%\*.zip"') do @del "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Intranet\%year%\%month%\%%F"
	for /f "skip=1 eol=: delims=" %%F in ('dir /b /o-d "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Wiki\%year%\%month%\*.zip"') do @del "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Wiki\%year%\%month%\%%F"
	for /f "skip=1 eol=: delims=" %%F in ('dir /b /o-d "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Support\%year%\%month%\*.zip"') do @del "%~d0\wamp\www\Symfony\SauvegardeBDDVersioning\Support\%year%\%month%\%%F"
)

:: Fin du script.
pause
goto :eof

:: Cette section retourne le dernier jour du mois en fonction du mois et de l'années passés en paramêtre.
:DaysOfMonth Year Month
setlocal DisableDelayedExpansion
set /a "yy = %~1, mm = 100%~2 %% 100"
set /a "n = 30 + !(((mm & 9) + 6) %% 7) + !(mm ^ 2) * (!(yy %% 4) - !(yy %% 100) + !(yy %% 400) - 2)"
endlocal &exit /b %n%