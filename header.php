<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miriel.net</title>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Play', sans-serif;
            background: #f0f8ff;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: 0;
            padding-bottom: 60px; /* フッターの高さ分の余白を追加 */
        }
        header {
            background: #1e90ff; /* 青色に変更 */
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap; /* レスポンシブ対応 */
            position: relative;
            width: 100%;
            top: 0;
        }
        header img {
            height: 50px;
            border-radius: 50%;
        }
        header .title {
            display: flex;
            flex-direction: column;
            align-items: center; /* 中央揃え */
        }
        header .title .subtitle {
            font-size: 12px;
        }
        nav {
            display: flex;
            flex-wrap: wrap; /* レスポンシブ対応 */
            justify-content: center; /* 中央揃え */
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
            flex-basis: 100px; /* 幅を確保 */
            min-width: 100px; /* 最小幅を設定 */
            text-align: center;
        }
        footer {
            background: #1e90ff; /* 青色に変更 */
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto; /* コンテンツとフッターの間にマージンを追加 */
            position: relative;
            width: 100%;
            bottom: 0;
        }
        h4 {
            animation: fadeIn 2s ease-in-out;
        }
        table {
            animation: slideIn 2s ease-in-out;
            margin: auto; /* テーブル中央揃え */
            width: 90%; /* テーブル幅調整 */
            max-width: 800px; /* テーブル最大幅設定 */
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
        @media (max-width: 600px) {
            header {
                flex-direction: column; /* スマホ対応 */
            }
            nav a {
                margin: 5px 0; /* スマホ対応でマージン調整 */
            }
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
