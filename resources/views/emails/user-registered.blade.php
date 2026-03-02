<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
        .info-table {
            width: 100%;
            margin-top: 20px;
        }
        .info-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .info-table td:first-child {
            font-weight: bold;
            width: 40%;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New User Registration</h2>
        <p>Dean Tech - IT Solutions</p>
    </div>
    
    <div class="content">
        <p>A new user has registered on your system. Here are the details:</p>
        
        <table class="info-table">
            <tr>
                <td>Name:</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>{{ $user->phone ?? 'Not provided' }}</td>
            </tr>
            <tr>
                <td>Registration Date:</td>
                <td>{{ $user->created_at->format('F j, Y, g:i a') }}</td>
            </tr>
        </table>
        
        <p style="margin-top: 20px;">You can view more details in the admin dashboard.</p>
    </div>
    
    <div class="footer">
        <p>This is an automated notification from Dean Tech System.</p>
    </div>
</body>
</html>
