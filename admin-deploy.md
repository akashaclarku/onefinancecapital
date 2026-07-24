# Admin-Only Post Deployment Steps

Use this only for admin panel and lead email setup on an already deployed server.

## 1) Open project and update admin env values

```bash
cd /home/ubuntu/codebase/onefinancecapital
nano .env
```

Set or update these values:

```env
ADMIN_PANEL_USERNAME=your_admin_username
ADMIN_PANEL_PASSWORD=your_admin_strong_password

MAIL_MAILER=resend
RESEND_KEY=your_real_resend_api_key
MAIL_FROM_ADDRESS=no-reply@onecapitalloans.com
MAIL_FROM_NAME="One Capital Finance"
```

## 2) Run only admin-related migrations

```bash
cd /home/ubuntu/codebase/onefinancecapital

# Important: refresh container image so new migration files exist inside /var/www/html
docker compose up --build -d app

# Check files exist inside container
docker compose exec app sh -c 'ls -1 /var/www/html/database/migrations | grep -E "create_leads_table|create_app_settings_table"'

# Run only the two admin migrations
docker compose exec app php artisan migrate --path=/var/www/html/database/migrations/2026_07_25_000001_create_leads_table.php --force
docker compose exec app php artisan migrate --path=/var/www/html/database/migrations/2026_07_25_000002_create_app_settings_table.php --force

# If path-based migrate still fails, run normal migrate once
docker compose exec app php artisan migrate --force
```

## 3) Refresh Laravel cache

```bash
cd /home/ubuntu/codebase/onefinancecapital
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
docker compose exec app php artisan view:cache
```

## 4) Verify admin routes

```bash
cd /home/ubuntu/codebase/onefinancecapital
docker compose exec app php artisan route:list --path=admin
```

Expected routes:

- `GET|HEAD admin/leads`
- `POST admin/leads/send-to`

## 5) Open admin panel and set lead recipient

Open in browser:

`https://onecapitalloans.com/admin/leads`

Login with Basic Auth using:

- `ADMIN_PANEL_USERNAME`
- `ADMIN_PANEL_PASSWORD`

In **Lead Send To** section:

1. Add destination email address
2. Click **Save Email**

All new leads will then be sent to this saved email through Resend.

## 6) Quick test command

```bash
cd /home/ubuntu/codebase/onefinancecapital
docker compose logs -f app
```

Submit one test lead form from the website, then confirm:

- row inserted in leads table
- lead email delivered to configured Lead Send To address

## 7) If Resend is not working

```bash
cd /home/ubuntu/codebase/onefinancecapital

# Make sure env has correct values
grep -E '^(MAIL_MAILER|RESEND_KEY|MAIL_FROM_ADDRESS|MAIL_FROM_NAME)=' .env

# Recreate app container so updated env is loaded
docker compose up -d --force-recreate app

# Refresh Laravel cache
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:cache

# Send direct test through Resend mailer
docker compose exec app php artisan tinker --execute="\Illuminate\Support\Facades\Mail::mailer('resend')->raw('Resend test mail', function (\$m) { \$m->to('your-email@example.com')->subject('Resend Test'); });"

# Check logs for resend failure details
docker compose exec app sh -c 'tail -n 200 /var/www/html/storage/logs/laravel.log'
```

Resend will reject sender if `MAIL_FROM_ADDRESS` domain is not verified in your Resend account.
