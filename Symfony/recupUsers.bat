cd C:\wamp\www\Symfony

csvde -f c:/wamp/www/Symfony/users.csv -d "dc=nox,dc=local" -r "(&(objectClass=User)(objectCategory=person)(!objectCategory=computer))" -l "sAMAccountName"

php app/console noxintranet:majdb