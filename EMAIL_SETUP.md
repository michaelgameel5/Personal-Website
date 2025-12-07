# 📧 Email Configuration Guide

This guide will help you set up email functionality for your contact form.

## 🚀 Quick Setup Options

### Option 1: Gmail SMTP (Recommended for Testing)

1. **Enable 2-Factor Authentication** on your Gmail account
2. **Generate an App Password**:
   - Go to: https://myaccount.google.com/apppasswords
   - Select "Mail" and "Other (Custom name)"
   - Enter "Laravel Portfolio" as the name
   - Copy the 16-character password

3. **Update your `.env` file**:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-16-character-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Option 2: Mailtrap (Best for Development/Testing)

1. **Sign up** at https://mailtrap.io (free tier available)
2. **Get your credentials** from the SMTP Settings
3. **Update your `.env` file**:
```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-mailtrap-username
MAIL_PASSWORD=your-mailtrap-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Option 3: SendGrid (Production Ready)

1. **Sign up** at https://sendgrid.com (free tier: 100 emails/day)
2. **Create an API Key**:
   - Go to Settings > API Keys
   - Create a new API Key with "Mail Send" permissions
   - Copy the API key

3. **Update your `.env` file**:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Option 4: Mailgun (Production Ready)

1. **Sign up** at https://www.mailgun.com (free tier: 5,000 emails/month)
2. **Get your credentials** from the dashboard
3. **Update your `.env` file**:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=your-mailgun-username
MAIL_PASSWORD=your-mailgun-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

## 📝 Complete .env Mail Configuration

Add these lines to your `.env` file (replace with your actual values):

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-password-or-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="Michael Gameel"
```

## ✅ Testing Your Email Setup

1. **Clear config cache** (if you changed .env):
   ```bash
   php artisan config:clear
   ```

2. **Test the contact form**:
   - Go to your contact page
   - Fill out and submit the form
   - Check your email inbox (or Mailtrap inbox if using Mailtrap)

3. **Check for errors**:
   - View Laravel logs: `storage/logs/laravel.log`
   - Check if email was sent successfully

## 🔍 Troubleshooting

### Email not sending?

1. **Check your `.env` file**:
   - Make sure all mail settings are correct
   - No extra spaces or quotes around values
   - MAIL_FROM_ADDRESS matches MAIL_USERNAME (for Gmail)

2. **Clear cache**:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

3. **Check Laravel logs**:
   ```bash
   tail -f storage/logs/laravel.log
   ```

4. **Test with Mailtrap first**:
   - Use Mailtrap for testing (it's easier to debug)
   - Once working, switch to production service

### Gmail Issues?

- **"Less secure app" error**: Use App Password instead of regular password
- **"Authentication failed"**: Make sure 2FA is enabled and you're using App Password
- **"Connection timeout"**: Check firewall/antivirus settings

### Common Errors:

- **"Connection refused"**: Wrong MAIL_HOST or MAIL_PORT
- **"Authentication failed"**: Wrong MAIL_USERNAME or MAIL_PASSWORD
- **"Could not instantiate mailer"**: Check MAIL_MAILER is set to "smtp"

## 📋 Important Notes

1. **Backup System**: Even if email fails, all contact form submissions are saved to `storage/app/contact_submissions.json`

2. **Security**: Never commit your `.env` file to Git! It contains sensitive credentials.

3. **Production**: For production, use a professional email service (SendGrid, Mailgun, AWS SES)

4. **Rate Limits**: Free tiers have limits:
   - Gmail: 500 emails/day
   - SendGrid: 100 emails/day (free)
   - Mailgun: 5,000 emails/month (free)
   - Mailtrap: Unlimited (testing only)

## 🎯 Recommended Setup by Use Case

- **Local Development**: Mailtrap
- **Testing**: Mailtrap or Gmail
- **Production (Low Volume)**: Gmail or SendGrid
- **Production (High Volume)**: SendGrid, Mailgun, or AWS SES

## 📞 Need Help?

If you're still having issues:
1. Check Laravel logs: `storage/logs/laravel.log`
2. Verify your email service credentials
3. Test with Mailtrap first to isolate the issue

