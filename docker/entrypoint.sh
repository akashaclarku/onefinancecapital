#!/usr/bin/env sh
set -eu

cd /var/www/html

if [ ! -f .env ] && [ -f .env.example ]; then
  cp .env.example .env
fi

if [ -z "${APP_KEY:-}" ] && [ -f .env ]; then
  php artisan key:generate --force --no-interaction || true
fi

if [ "${DB_CONNECTION:-}" = "mysql" ] && [ -n "${DB_HOST:-}" ]; then
  DB_PORT_VALUE="${DB_PORT:-3306}"
  echo "Waiting for database ${DB_HOST}:${DB_PORT_VALUE}..."

  i=0
  while ! nc -z "${DB_HOST}" "${DB_PORT_VALUE}" >/dev/null 2>&1; do
    i=$((i + 1))
    if [ "$i" -ge 60 ]; then
      echo "Database not reachable after 60 attempts, continuing startup."
      break
    fi
    sleep 2
  done
fi

php artisan migrate --force || true
php artisan storage:link || true
php artisan optimize:clear || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

exec "$@"
