# Railway Deployment Guide

This guide will help you deploy your Laravel portfolio to Railway.app

## Prerequisites
- GitHub account with your repository pushed
- Railway.app account

## Step-by-Step Deployment

### 1. Create Railway Account
1. Go to https://railway.app
2. Click "Login with GitHub"
3. Authorize Railway to access your GitHub account

### 2. Create New Project
1. Click "New Project"
2. Select "Deploy from GitHub repo"
3. Select your "Personal-Website" repository
4. Click "Deploy"

### 3. Add MySQL Database
1. In your Railway project dashboard, click "Add Service"
2. Select "MySQL"
3. Click "Deploy"
4. Railway will automatically create the database and set environment variables

### 4. Configure Environment Variables
Railway will automatically set most variables. You need to manually set:

**In Railway Dashboard → Variables:**
```
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-url.railway.app  (replace with your actual Railway URL)
```

Your APP_KEY is already set. If not, generate one locally with:
```bash
php artisan key:generate
```

### 5. Database Setup
Once deployed, Railway will show your database credentials in the Variables section. They will be auto-set as:
- `DATABASE_URL` (Railway sets this automatically)

Or individually:
- `DB_HOST` 
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

### 6. Run Migrations
After first deployment:
1. Go to Railway Dashboard
2. Click on your project
3. Click "Deployments" → view latest
4. The `Procfile` we created will automatically run migrations on startup

### 7. Verify Deployment
1. Check Railway dashboard for your app URL
2. Visit the URL to see if your site loads
3. Test all pages: Home, About, Projects, Contact

## Troubleshooting

### If migrations don't run:
Connect to Railway and run manually:
```bash
railway run php artisan migrate --force
```

### If the app shows errors:
Check logs in Railway Dashboard → Deployments → Logs

### If database connection fails:
Verify MySQL service is added and running in your project

## Important Notes
- Your `.env` file is in `.gitignore`, so Railway uses its own environment variables
- Never commit `.env` to GitHub with sensitive credentials
- The `Procfile` tells Railway how to run your app
- The `railway.json` configures the build process

## Next Steps
- Add your custom domain in Railway settings
- Set up automated deployments (Railway does this automatically from main branch)
- Monitor your app's performance in the Railway dashboard

For more info, visit: https://docs.railway.app
