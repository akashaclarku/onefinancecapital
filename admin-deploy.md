# Admin Deployment Guide (EC2 + Docker)

This guide includes all commands to deploy the project on EC2, configure environment values, run migrations, and verify the admin lead panel setup.

## 1) Connect to EC2 and install Docker

```bash
ssh -i /path/to/your-key.pem ubuntu@YOUR_EC2_PUBLIC_IP

sudo apt update
sudo apt install -y ca-certificates curl gnupg lsb-release
sudo install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
sudo chmod a+r /etc/apt/keyrings/docker.gpg

echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu $(. /etc/os-release && echo \"$VERSION_CODENAME\") stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

sudo apt update
sudo apt install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
sudo systemctl enable docker
sudo systemctl start docker
sudo usermod -aG docker $USER
```

Log out and log in again, then verify:

```bash
docker --version
docker compose version
```

## 2) Pull project code

```bash
cd /home/ubuntu
mkdir -p codebase
cd codebase

# If first deploy
git clone https://github.com/YOUR_ORG/YOUR_REPO.git onefinancecapital

# If already cloned
cd /home/ubuntu/codebase/onefinancecapital
git pull origin main
```

## 3) Create production env file

```bash
cd /home/ubuntu/codebase/onefinancecapital
cp .env.example .env
nano .env
```

Use and update these values in `.env`:

```env
APP_NAME="One Capital Finance"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://onecapitalloans.com

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=geet
DB_USERNAME=geet
DB_PASSWORD=geet

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

MAIL_MAILER=resend
MAIL_FROM_ADDRESS=no-reply@onecapitalloans.com
MAIL_FROM_NAME="One Capital Finance"
RESEND_KEY=your_real_resend_api_key

ADMIN_PANEL_USERNAME=your_admin_username
ADMIN_PANEL_PASSWORD=your_admin_strong_password
```

## 4) Build and start containers

```bash
cd /home/ubuntu/codebase/onefinancecapital
docker compose down
docker compose up --build -d
```

## 5) Run migrations and Laravel setup

The container entrypoint already runs migration automatically. Run these once manually too for safety:

```bash
docker compose exec app php artisan key:generate --force
docker compose exec app php artisan migrate --force
docker compose exec app php artisan storage:link
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
docker compose exec app php artisan view:cache
```

## 6) Verify admin lead routes and app health

```bash
docker compose exec app php artisan route:list --path=admin
docker compose ps
docker compose logs -f app
```

Open:

- Site: `http://YOUR_EC2_PUBLIC_IP:8080`
- Admin leads: `http://YOUR_EC2_PUBLIC_IP:8080/admin/leads`

Admin panel uses Basic Auth with:

- `ADMIN_PANEL_USERNAME`
- `ADMIN_PANEL_PASSWORD`

Inside admin page, set **Lead Send To** email to receive all new lead emails via Resend.

## 7) Optional host Nginx reverse proxy (domain + SSL)

Install Nginx + Certbot:

```bash
sudo apt install -y nginx certbot python3-certbot-nginx
```

Create site config:

```bash
sudo tee /etc/nginx/sites-available/onecapitalloans.conf > /dev/null <<'EOF'
server {
    listen 80;
    server_name onecapitalloans.com www.onecapitalloans.com;

    location / {
        proxy_pass http://127.0.0.1:8080;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
EOF

sudo ln -s /etc/nginx/sites-available/onecapitalloans.conf /etc/nginx/sites-enabled/
sudo rm -f /etc/nginx/sites-enabled/default
sudo nginx -t
sudo systemctl restart nginx
sudo systemctl enable nginx
```

Issue SSL certificate:

```bash
sudo certbot --nginx -d onecapitalloans.com -d www.onecapitalloans.com
```

## 8) Update deployment commands (next releases)

```bash
cd /home/ubuntu/codebase/onefinancecapital
git pull origin main
docker compose down
docker compose up --build -d
docker compose exec app php artisan migrate --force
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
docker compose exec app php artisan view:cache
docker compose logs -f app
```

## 9) Security group checklist (AWS)

Allow inbound traffic:

- TCP 22 (SSH)
- TCP 80 (HTTP)
- TCP 443 (HTTPS)
- TCP 8080 (only if directly testing without host Nginx)

Do not expose 3306 publicly unless you absolutely need remote MySQL access.
