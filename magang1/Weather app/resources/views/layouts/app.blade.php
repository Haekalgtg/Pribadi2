<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login App')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        h1, h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border 0.3s;
        }
        input:focus {
            outline: none;
            border-color: #667eea;
        }
        .error {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #5568d3;
        }
        .btn-danger {
            background: #e74c3c;
        }
        .btn-danger:hover {
            background: #c0392b;
        }
        .link {
            text-align: center;
            margin-top: 20px;
        }
        .link a {
            color: #667eea;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .checkbox-group input {
            margin-right: 8px;
        }
        .dashboard-container {
            text-align: center;
        }
        .user-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .user-info p {
            margin: 10px 0;
            color: #555;
        }
        /* Weather Widget Styles */
        .weather-widget {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 25px;
        border-radius: 15px;
        margin: 20px 0;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .weather-widget.error {
            background: #e74c3c;
            text-align: center;
            padding: 20px;
        }

        .weather-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .weather-header h3 {
            margin: 0 0 5px 0;
            font-size: 24px;
            color: white;
        }

        .weather-location {
            margin: 0;
            font-size: 16px;
            opacity: 0.9;
        }

        .weather-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .weather-temp {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .temp-value {
            font-size: 48px;
            font-weight: bold;
        }

        .weather-icon img {
            width: 80px;
            height: 80px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .weather-description {
            text-align: center;
        }

        .main-desc {
            font-size: 20px;
            margin: 0;
            text-transform: capitalize;
        }

        .weather-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 10px;
        }

        .detail-item {
            background: rgba(255,255,255,0.15);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
        }

        .detail-label {
            display: block;
            font-size: 12px;
            opacity: 0.8;
            margin-bottom: 5px;
        }

        .detail-value {
            display: block;
            font-size: 18px;
            font-weight: bold;
        }

/* Responsive */
@media (max-width: 480px) {
    .weather-details {
        grid-template-columns: 1fr;
    }
    
    .temp-value {
        font-size: 36px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>