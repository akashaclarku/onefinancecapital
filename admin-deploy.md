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
docker compose exec app php artisan migrate --path=database/migrations/2026_07_25_000001_create_leads_table.php --force
docker compose exec app php artisan migrate --path=database/migrations/2026_07_25_000002_create_app_settings_table.php --force
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
