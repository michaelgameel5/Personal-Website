# Michael Gameel - Personal Portfolio Website

A modern, responsive personal portfolio website built with Laravel, showcasing cybersecurity expertise, projects, and professional experience.

## 🚀 Features

- **Modern UI/UX**: Clean, professional design with smooth animations
- **Fully Responsive**: Works seamlessly on desktop, tablet, and mobile devices
- **Dark Mode**: Toggle between light and dark themes
- **Blog System**: Dynamic blog with categories and tags
- **Project Gallery**: Showcase projects with detailed descriptions
- **Contact Form**: Functional contact form with email notifications
- **SEO Optimized**: Meta tags and semantic HTML for better search engine visibility

## 📋 Requirements

- PHP >= 8.1
- Composer
- MySQL or MariaDB
- Node.js & NPM (optional, for asset compilation)

## 🛠️ Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd portfolio
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Setup

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 4. Configure Database

Edit the `.env` file and update your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Run Migrations and Seeders

```bash
php artisan migrate
php artisan db:seed
```

This will create the necessary tables and populate them with sample data (projects and blog posts).

### 6. Configure Mail (Optional)

For the contact form to send emails, configure your mail settings in `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

**Note**: Contact form submissions are also saved to `storage/app/contact_submissions.json` as a backup.

### 7. Start the Development Server

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 📁 Project Structure

```
portfolio/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── BlogController.php
│   │       ├── ContactController.php
│   │       ├── HomeController.php
│   │       └── ProjectController.php
│   └── Models/
│       ├── BlogPost.php
│       └── Project.php
├── database/
│   ├── migrations/
│   │   ├── 2024_01_01_000001_create_projects_table.php
│   │   └── 2024_01_01_000002_create_blog_posts_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── public/
│   └── assets/
│       ├── css/
│       │   └── style.css
│       └── js/
│           └── main.js
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── about.blade.php
│       ├── blog/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       ├── contact.blade.php
│       ├── experience.blade.php
│       ├── home.blade.php
│       ├── projects/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       └── emails/
│           └── contact.blade.php
└── routes/
    └── web.php
```

## 🎨 Customization

### Update Personal Information

1. **Homepage**: Edit `resources/views/home.blade.php`
2. **About Page**: Edit `resources/views/about.blade.php`
3. **Social Links**: Update links in `resources/views/layouts/app.blade.php` and `resources/views/contact.blade.php`

### Add Projects

You can add projects in two ways:

1. **Via Database Seeder**: Edit `database/seeders/DatabaseSeeder.php`
2. **Via Database**: Insert directly into the `projects` table

### Add Blog Posts

Similar to projects, you can add blog posts via:
1. Database seeder
2. Direct database insertion
3. Create an admin panel (future enhancement)

### Update Colors

Edit CSS variables in `public/assets/css/style.css`:

```css
:root {
    --primary-color: #1A73E8;
    --secondary-color: #111827;
    --background-color: #F3F4F6;
    /* ... */
}
```

## 📝 Pages

- **Home** (`/`): Hero section, summary, and featured projects
- **About** (`/about`): Personal information, education, experience, and skills
- **Projects** (`/projects`): Gallery of all projects
- **Experience** (`/experience`): Detailed timeline of professional experience
- **Blog** (`/blog`): Blog listing with category filters
- **Contact** (`/contact`): Contact form and social links

## 🚀 Deployment

### For Shared Hosting (cPanel, etc.)

1. Upload all files to your hosting directory
2. Set the document root to the `public` folder
3. Update `.env` with production database credentials
4. Run migrations: `php artisan migrate`
5. Set proper file permissions:
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

### For VPS/Cloud (DigitalOcean, AWS, etc.)

1. Install PHP, Composer, and MySQL on your server
2. Clone the repository
3. Follow installation steps above
4. Configure web server (Nginx/Apache) to point to `public` directory
5. Set up SSL certificate (Let's Encrypt)
6. Configure environment variables for production

### Environment Variables for Production

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

## 🔧 Troubleshooting

### Contact Form Not Sending Emails

- Check mail configuration in `.env`
- Verify contact submissions are saved to `storage/app/contact_submissions.json`
- Check Laravel logs: `storage/logs/laravel.log`

### Assets Not Loading

- Ensure files are in `public/assets/` directory
- Clear Laravel cache: `php artisan cache:clear`
- Check file permissions

### Database Errors

- Verify database credentials in `.env`
- Ensure database exists: `CREATE DATABASE portfolio_db;`
- Run migrations: `php artisan migrate:fresh --seed`

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👤 Author

**Michael Gameel**
- Location: Cairo, Egypt
- LinkedIn: [michael-gameel](https://linkedin.com/in/michael-gameel)
- GitHub: [michael-gameel](https://github.com/michael-gameel)

## 🙏 Acknowledgments

- Laravel Framework
- Inter Font by Google Fonts
- Modern CSS techniques and best practices

---

Built with ❤️ using Laravel

