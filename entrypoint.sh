#!/bin/bash

# Set permission storage dan cache setiap start container
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Lanjutkan dengan command default (php-fpm)
exec "$@"
