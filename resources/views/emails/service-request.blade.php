<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Service Request</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .info-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .info-row {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .info-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .label {
            font-weight: 600;
            color: #667eea;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            color: #333;
        }
        .message-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            border-left: 4px solid #667eea;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 14px;
        }
        .btn {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0;">🔔 New Service Request</h1>
        <p style="margin: 10px 0 0 0;">You have a new inquiry from Dean Tech website</p>
    </div>
    
    <div class="content">
        <div class="info-box">
            <div class="info-row">
                <span class="label">👤 Client Name</span>
                <span class="value">{{ $name }}</span>
            </div>
            
            <div class="info-row">
                <span class="label">📧 Email Address</span>
                <span class="value">
                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                </span>
            </div>
            
            <div class="info-row">
                <span class="label">📱 Phone Number</span>
                <span class="value">
                    @if($phone)
                        <a href="tel:{{ $phone }}">{{ $phone }}</a>
                    @else
                        Not provided
                    @endif
                </span>
            </div>
            
            <div class="info-row">
                <span class="label">🛠 Service Requested</span>
                <span class="value">{{ $service ?? 'General Inquiry' }}</span>
            </div>
        </div>
        
        <div class="message-box">
            <span class="label">💬 Message</span>
            <p class="value">{{ $clientMessage }}</p>
        </div>
        
        <div style="text-align: center;">
            <a href="mailto:{{ $email }}" class="btn">Reply to Client</a>
        </div>
    </div>
    
    <div class="footer">
        <p>This is an automated notification from Dean Tech Website.</p>
        <p>Please respond to the client as soon as possible.</p>
    </div>
</body>
</html>
