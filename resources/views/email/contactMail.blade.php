<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Email from Customer</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        table {
            border-spacing: 0;
            width: 100%;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
        }

        /* Email Container */
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .email-header {
            background: #4CAF50;
            color: #ffffff;
            /* text-align: center; */
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .email-header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 24px;
        }

        /* Body */
        .email-body {
            padding: 20px;
            line-height: 1.6;
            font-size: 20px;
        }
        .email-body p {
            margin: 0 0 10px;
        }
        .email-body a {
            color: #0077ff;
            text-decoration: none;
        }

        /* Footer */
        .email-footer {
            /* text-align: center; */
            padding: 15px;
            background: #f1f1f1;
            border-radius: 0 0 8px 8px;
            font-size: 14px;
            color: #666;
        }
        .email-footer a {
            text-align: center;
            color: #0077ff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <table class="email-container">
        <tr>
            <td class="email-header">
                <h1 style="text-align: center;">Customer Message</h1>
            </td>
        </tr>
        <tr>
            <td class="email-body">
                <h2>{{ $validateData['name'] }}</h2>
                <p>Email: {{ $validateData['email'] }}</p>
                <p>Subject: {{ $validateData['subject'] }}</p>
                <p>Message: {{ $validateData['message'] }}</p>
                <p>Check it out on our website! <a href="#">Makoine Foods and Farms LTD</a></p>
            </td>
        </tr>
        <tr>
            <td class="email-footer">
                <p  style="text-align: center;">&copy; {{ config('app.name') }}. <br> All rights reserved.</p>
                <p  style="text-align: center;">
                    <a href="mailto:makoinefarmsltd@gmail.com">Contact Support</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>


