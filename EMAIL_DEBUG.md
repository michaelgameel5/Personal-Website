# 🔍 Email Debugging Guide

## Quick Debug Steps

### Step 1: Check Your Configuration

Run this command to see your current mail settings:
```bash
php artisan config:show mail
```

### Step 2: Test Email Sending

Try submitting the contact form again, then check the logs:
```bash
# View the latest log entries
tail -n 50 storage/logs/laravel.log
```

Or on Windows PowerShell:
```powershell
Get-Content storage\logs\laravel.log -Tail 50
```

Look for:
- `Attempting to send email to: [your-email]`
- `Email sent successfully to: [your-email]`
- `Email sending failed: [error message]`

### Step 3: Common Gmail Issues

#### Issue 1: "Less secure app" error
**Solution**: Use App Password instead of regular password
1. Go to: https://myaccount.google.com/apppasswords
2. Generate a new app password for "Mail"
3. Use that 16-character password in your `.env` file

#### Issue 2: Authentication failed
**Check**:
- Is 2-Factor Authentication enabled? (Required for App Passwords)
- Is the App Password correct? (16 characters, no spaces)
- Does `MAIL_USERNAME` match your Gmail address exactly?

#### Issue 3: Email sent but not received
**Check**:
- Spam/Junk folder
- Gmail's "All Mail" folder
- Check if email was actually sent (look for "Email sent successfully" in logs)

### Step 4: Verify .env Settings

Make sure your `.env` file has these exact settings (no quotes, no spaces):

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=michaelgameel.sut@gmail.com
MAIL_PASSWORD=your-16-char-app-password-here
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=michaelgameel.sut@gmail.com
MAIL_FROM_NAME="Michael Gameel Website"
```

**Important**: 
- `MAIL_USERNAME` and `MAIL_FROM_ADDRESS` should be the SAME email
- `MAIL_PASSWORD` should be your App Password (16 characters)
- No quotes around values (except MAIL_FROM_NAME)

### Step 5: Clear Cache After Changes

After updating `.env`, always run:
```bash
php artisan config:clear
php artisan cache:clear
```

### Step 6: Test with Mailtrap (Recommended for Testing)

If Gmail is giving you trouble, use Mailtrap for testing:

1. Sign up at https://mailtrap.io (free)
2. Get your credentials from the inbox
3. Update `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-mailtrap-username
MAIL_PASSWORD=your-mailtrap-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="Michael Gameel Website"
```

4. Clear cache and test:
```bash
php artisan config:clear
```

5. Submit the contact form
6. Check your Mailtrap inbox - you'll see the email there!

### Step 7: Check if Email is Being Sent

After submitting the form, check the logs:
```bash
# On Windows PowerShell
Get-Content storage\logs\laravel.log -Tail 20 | Select-String "Email"
```

You should see:
- `Attempting to send email to: michaelgameel.sut@gmail.com`
- `Email sent successfully to: michaelgameel.sut@gmail.com`

If you see an error, it will tell you what's wrong.

## Still Not Working?

1. **Check Gmail Security**:
   - Make sure "Less secure app access" is NOT the issue (use App Password instead)
   - Verify 2FA is enabled
   - Check if Gmail is blocking the login attempt

2. **Try Mailtrap First**:
   - This will confirm if the code is working
   - If Mailtrap works, the issue is with Gmail configuration
   - If Mailtrap doesn't work, there's a code issue

3. **Check Firewall/Antivirus**:
   - Some antivirus software blocks SMTP connections
   - Try temporarily disabling it to test

4. **Check Network**:
   - Some networks block SMTP port 587
   - Try a different network or use a VPN

## Quick Test

Submit the contact form, then immediately run:
```bash
Get-Content storage\logs\laravel.log -Tail 30
```

Look for email-related messages to see what happened!


