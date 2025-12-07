<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .email-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            color: #1A73E8;
            margin-top: 0;
        }
        .info-row {
            margin: 15px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 3px solid #1A73E8;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
        .message-box {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            margin: 15px 0;
            white-space: pre-wrap;
        }
        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
        .footer {
            color: #888;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>New Contact Form Submission</h2>
        
        <div class="info-row">
            <span class="info-label">Name:</span> {{ $name }}
        </div>
        
        <div class="info-row">
            <span class="info-label">Email:</span> <a href="mailto:{{ $email }}">{{ $email }}</a>
        </div>
        
        <div class="info-row">
            <span class="info-label">Message:</span>
        </div>
        
        <div class="message-box">
            {{ $messageText }}
        </div>
        
        <hr>
        
        <div class="footer">
            <p>Submitted on: {{ $created_at }}</p>
            <p>You can reply directly to this email to respond to {{ $name }}.</p>
        </div>
    </div>
</body>
</html>

