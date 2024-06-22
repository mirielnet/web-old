<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miriel.net</title>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Play', sans-serif;
            background: #f0f8ff;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background: #ff69b4;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header img {
            height: 50px;
            border-radius: 50%;
        }
        header .title {
            display: flex;
            flex-direction: column;
        }
        header .title .subtitle {
            font-size: 12px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }
        footer {
            background: #ff69b4;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        h4 {
            animation: fadeIn 2s ease-in-out;
        }
        table {
            animation: slideIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-title">
            <img src="https://avatars.githubusercontent.com/u/168396067?v=4" alt="Miriel">
            <div class="title">
                <span>Miriel.net</span>
                <span class="subtitle">みりえるどっとねっと</span>
            </div>
        </div>
        <nav>
            <a href="#about">About</a>
            <a href="#accounts">Accounts</a>
        </nav>
    </header>
