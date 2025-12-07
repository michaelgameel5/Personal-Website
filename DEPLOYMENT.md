# Deployment Guide

This guide will help you deploy the Michael Gameel Portfolio website to various hosting platforms.

## 📋 Pre-Deployment Checklist

- [ ] Update all personal information in views
- [ ] Replace placeholder social media links with actual URLs
- [ ] Add your actual profile image
- [ ] Configure production database
- [ ] Set up email service for contact form
- [ ] Update APP_URL in .env
- [ ] Set APP_DEBUG=false for production
- [ ] Generate new APP_KEY if needed

## 🚀 Deployment Options

### Option 1: Shared Hosting (cPanel, etc.)

1. **Upload Files**
   - Upload all project files via FTP/SFTP
   - Ensure the document root points to the `public` folder

2. **Database Setup**
   - Create a MySQL database via cPanel
   - Update `.env` with database credentials

3. **File Permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   chmod -R 755 public
   ```

4. **Run Migrations**
   - Use cPanel's terminal or SSH
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```

### Option 2: VPS (DigitalOcean, AWS EC2, etc.)

1. **Server Setup**
   ```bash
   # Update system
   sudo apt update && sudo apt upgrade -y
   
   # Install PHP, Composer, MySQL
   sudo apt install php8.1 php8.1-fpm php8.1-mysql php8.1-mbstring php8.1-xml php8.1-curl
   sudo apt install composer mysql-server nginx
   ```

2. **Clone Repository**
   ```bash
   git clone <your-repo-url> /var/www/portfolio
   cd /var/www/portfolio
   composer install --no-dev --optimize-autoloader
   ```

3. **Environment Configuration**
   ```bash
   cp .env.example .env
   nano .env  # Edit with production values
   php artisan key:generate
   ```

4. **Database Setup**
   ```bash
   mysql -u root -p
   CREATE DATABASE portfolio_db;
   CREATE USER 'portfolio_user'@'localhost' IDENTIFIED BY 'strong_password';
   GRANT ALL PRIVILEGES ON portfolio_db.* TO 'portfolio_user'@'localhost';
   FLUSH PRIVILEGES;
   EXIT;
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```

6. **Nginx Configuration**
   Create `/etc/nginx/sites-available/portfolio`:
   ```nginx
   server {
       listen 80;
       server_name yourdomain.com;
       root /var/www/portfolio/public;

       add_header X-Frame-Options "SAMEORIGIN";
       add_header X-Content-Type-Options "nosniff";

       index index.php;

       charset utf-8;

       location / {
           try_files $uri $uri/ /index.php?$query_string;
       }

       location = /favicon.ico { access_log off; log_not_found off; }
       location = /robots.txt  { access_log off; log_not_found off; }

       error_page 404 /index.php;

       location ~ \.php$ {
           fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
           fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
           include fastcgi_params;
       }

       location ~ /\.(?!well-known).* {
           deny all;
       }
   }
   ```

   Enable site:
   ```bash
   sudo ln -s /etc/nginx/sites-available/portfolio /etc/nginx/sites-enabled/
   sudo nginx -t
   sudo systemctl reload nginx
   ```

7. **SSL Certificate (Let's Encrypt)**
   ```bash
   sudo apt install certbot python3-certbot-nginx
   sudo certbot --nginx -d yourdomain.com
   ```

8. **Set Permissions**
   ```bash
   sudo chown -R www-data:www-data /var/www/portfolio
   sudo chmod -R 755 /var/www/portfolio
   sudo chmod -R 775 /var/www/portfolio/storage
   sudo chmod -R 775 /var/www/portfolio/bootstrap/cache
   ```

### Option 3: Laravel Forge / Ploi

These platforms automate most of the deployment process:

1. Connect your Git repository
2. Configure server and database
3. Set environment variables
4. Deploy automatically on git push

### Option 4: Heroku

1. **Install Heroku CLI**
   ```bash
   heroku login
   ```

2. **Create Heroku App**
   ```bash
   heroku create your-app-name
   ```

3. **Add Database**
   ```bash
   heroku addons:create cleardb:ignite
   ```

4. **Set Environment Variables**
   ```bash
   heroku config:set APP_KEY=$(php artisan key:generate --show)
   heroku config:set APP_ENV=production
   heroku config:set APP_DEBUG=false
   ```

5. **Deploy**
   ```bash
   git push heroku main
   heroku run php artisan migrate --force
   heroku run php artisan db:seed --force
   ```

## 🔒 Security Checklist

- [ ] Set `APP_DEBUG=false` in production
- [ ] Use strong database passwords
- [ ] Enable HTTPS/SSL
- [ ] Set secure file permissions
- [ ] Keep Laravel and dependencies updated
- [ ] Use environment variables for sensitive data
- [ ] Configure proper CORS headers if needed
- [ ] Set up regular backups

## 📧 Email Configuration

For production email, use services like:
- **Mailtrap** (for testing)
- **SendGrid**
- **Mailgun**
- **Amazon SES**

Update `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your_api_key
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="Michael Gameel"
```

## 🔄 Post-Deployment

1. Test all pages and functionality
2. Verify contact form works
3. Check mobile responsiveness
4. Test dark mode toggle
5. Verify all links work
6. Check page load speeds
7. Test SEO meta tags

## 📊 Monitoring & Maintenance

- Set up error logging (Laravel Log)
- Monitor server resources
- Regular backups of database
- Keep dependencies updated
- Monitor contact form submissions

## 🆘 Troubleshooting

### 500 Error
- Check Laravel logs: `storage/logs/laravel.log`
- Verify file permissions
- Check `.env` configuration

### Assets Not Loading
- Clear cache: `php artisan cache:clear`
- Check file paths in `public/assets/`
- Verify web server configuration

### Database Connection Error
- Verify credentials in `.env`
- Check database server is running
- Verify user permissions

---

Need help? Check the main README.md or Laravel documentation.

