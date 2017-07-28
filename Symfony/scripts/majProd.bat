@echo off

cd %~d0\wamp\www\Symfony

:: Passage de l'intranet en mode maintenance.
echo Début de la maintenance.
php app/console lexik:maintenance:lock --no-interaction

:: Mise à jour de la base de données.
echo Mise à jour de la base de données...
php app/console doctrine:schema:update --force

:: Nettoyage du cache.
echo Nettoyage du cache...
php app/console cache:clear --env=prod

:: Copie des fichiers css et javascript.
echo Copie des fichiers css et javascript...
php app/console assetic:dump --env=prod

:: Copie des images.
echo Copie des images...
php app/console assets:install --env=prod

::php composer.phar dump-autoload --optimize

:: Sortie de l'intranet du mode maintenance.
echo Fin de la maintenance.
php app/console lexik:maintenance:unlock --no-interaction

pause