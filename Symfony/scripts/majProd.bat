cd %~d0\wamp\www\Symfony

php app/console doctrine:schema:update --force

php app/console assetic:dump --env=prod

php app/console assets:install --env=prod

php composer.phar dump-autoload --optimize

php app/console cache:clear --env=prod