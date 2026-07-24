# Deployment guide for EC2

This project is prepared to run on an EC2 instance with Docker Compose and a MySQL container.

## 1. Prepare the EC2 server

Connect to your server and install Docker:

```bash
sudo apt update
sudo apt install -y ca-certificates curl gnupg lsb-release
sudo install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
sudo chmod a+r /etc/apt/keyrings/docker.gpg

echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | \
  sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

sudo apt update
sudo apt install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
sudo systemctl enable docker
sudo systemctl start docker
sudo usermod -aG docker $USER
```

Log out and back in, then verify:

```bash
docker --version
docker compose version
```

## 2. Go to the project folder

```bash
cd /home/ubuntu/codebase/onefinancecapital
```

If you need to update the code from Git:

```bash
git pull origin main
```

## 3. Configure environment variables

Create a production environment file:

```bash
cp .env.example .env
```

Then make sure the container can see it by copying it into the app directory used by Docker:

```bash
cp .env /home/ubuntu/codebase/onefinancecapital/.env
```

If the file is missing inside the container, create it there as well:

```bash
docker compose exec app sh -c 'cp /var/www/html/.env.example /var/www/html/.env || true'
```

Update the values for your production domain and database:

```bash
nano .env
```

Use values similar to the following:

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
```

> The Docker Compose file already provides the MySQL container values for the app service. The host-level `.env` file is mainly for Laravel CLI commands run inside the container.

## 4. Build and start the containers

```bash
docker compose up --build -d
```

## 5. Run Laravel setup inside the app container

```bash
docker compose exec app sh -c 'test -f /var/www/html/.env || cp /var/www/html/.env.example /var/www/html/.env'
docker compose exec app php artisan key:generate --force
docker compose exec app php artisan migrate --force
docker compose exec app php artisan storage:link
docker compose exec app php artisan optimize
```

## 6. Domain and HTTPS setup

Point the DNS A record for `onecapitalloans.com` and `www.onecapitalloans.com` to your EC2 public IP.

If you want HTTPS, install Nginx and Certbot on the EC2 host and proxy traffic to the Docker container:

```bash
sudo apt install -y nginx certbot python3-certbot-nginx
```

Example host Nginx config:

```nginx
server {
    listen 80;
    server_name onecapitalloans.com www.onecapitalloans.com;
    location / {
        proxy_pass http://127.0.0.1:80;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```

Then enable SSL:

```bash
sudo certbot --nginx -d onecapitalloans.com -d www.onecapitalloans.com
```

## 7. Useful commands

```bash
# View container status
docker compose ps

# View logs
docker compose logs -f app

# Restart containers
docker compose restart

# Stop containers
docker compose down
```

## 8. Security group settings

Allow inbound traffic on:

- TCP 80
- TCP 443
- TCP 3306 only if you want direct DB access from outside the server
