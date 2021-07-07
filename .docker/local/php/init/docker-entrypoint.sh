#!/bin/bash

set -e

sleep 15

# Build cache
php /whizz-user/bin/console cache:clear --no-warmup --env=test
php /whizz-user/bin/console cache:warmup --env=test

chmod -R 777 /whizz-user/var
chown -R www-data:www-data /whizz-user/var

php /whizz-user/bin/console doctrine:migrations:migrate --env=test --no-interaction --allow-no-migration

echo "Migrations executed successfully."

exec "$@"
