cd %~d0\wamp\www\Symfony

csvde -f %~d0/wamp/www/Symfony/users.csv -d "dc=nox,dc=local" -r "(&(objectClass=User)(objectCategory=person)(!objectCategory=computer))" -l "sAMAccountName, sn, givenName"

php app/console noxintranet:majdb
