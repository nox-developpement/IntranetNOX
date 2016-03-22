cd C:\wamp\www\Symfony

php app/console doctrine:schema:update --force

php app/console assetic:dump --env=prod

php app/console assets:install --env=prod

php app/console cache:clear --env=prod