# 🚀 Quick Start Guide

Get your portfolio website up and running in 5 minutes!

## Step 1: Install Dependencies

```bash
composer install
```

## Step 2: Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

## Step 3: Configure Database

Edit `.env` file and update these lines:

```env
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

Then create the database:

```bash
# MySQL
mysql -u root -p
CREATE DATABASE portfolio_db;
EXIT;
```

## Step 4: Run Migrations & Seeders

```bash
php artisan migrate
php artisan db:seed
```

This will:
- Create the database tables
- Add 7 sample projects
- Add 5 sample blog posts

## Step 5: Start the Server

```bash
php artisan serve
```

Visit: **http://localhost:8000**

## ✅ You're Done!

Your website is now running locally. You can:

- View all pages (Home, About, Projects, Experience, Blog, Contact)
- Test the contact form
- Toggle dark mode
- Browse projects and blog posts

## 🎨 Next Steps

1. **Update Personal Information**
   - Edit `resources/views/home.blade.php`
   - Edit `resources/views/about.blade.php`

2. **Add Your Profile Image**
   - Place image in `public/assets/images/`
   - Update image path in `resources/views/home.blade.php`

3. **Update Social Links**
   - Edit `resources/views/layouts/app.blade.php`
   - Edit `resources/views/contact.blade.php`

4. **Customize Projects**
   - Edit `database/seeders/DatabaseSeeder.php`
   - Or add via database directly

5. **Configure Email** (Optional)
   - Update mail settings in `.env`
   - Contact form will still save to JSON file

## 🐛 Troubleshooting

**Error: Class not found**
- Run `composer dump-autoload`

**Error: Database connection failed**
- Check `.env` database credentials
- Ensure MySQL is running

**Assets not loading**
- Clear cache: `php artisan cache:clear`
- Check file paths in `public/assets/`

**500 Error**
- Check `storage/logs/laravel.log`
- Ensure `storage/` and `bootstrap/cache/` are writable

## 📚 Need More Help?

- See `README.md` for detailed documentation
- See `DEPLOYMENT.md` for deployment instructions
- See `PROJECT_SUMMARY.md` for feature overview

---

Happy coding! 🎉

