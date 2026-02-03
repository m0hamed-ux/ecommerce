<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #dc2626;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .info-row {
            background-color: #f9fafb;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            border-left: 4px solid #dc2626;
        }
        .label {
            font-weight: bold;
            color: #374151;
            display: inline-block;
            min-width: 100px;
        }
        .message-box {
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            border-left: 4px solid #dc2626;
        }
        .footer {
            background-color: #f9fafb;
            padding: 20px;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <h2 style="color: #1f2937; margin-top: 0;">Contact Details</h2>
            
            <div class="info-row">
                <span class="label">Name:</span>
                <span>{{ $first_name }} {{ $last_name }}</span>
            </div>
            
            <div class="info-row">
                <span class="label">Email:</span>
                <span><a href="mailto:{{ $email }}" style="color: #dc2626; text-decoration: none;">{{ $email }}</a></span>
            </div>
            
            <div class="info-row">
                <span class="label">Phone:</span>
                <span>{{ $phone }}</span>
            </div>
            
            <div class="message-box">
                <h3 style="margin-top: 0; color: #1f2937;">Message:</h3>
                <p style="margin: 0; white-space: pre-wrap;">{{ $message }}</p>
            </div>
        </div>
        
        <div class="footer">
            <p>This email was sent from the contact form on your website.</p>
        </div>
    </div>
</body>
</html>