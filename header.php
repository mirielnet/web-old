<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miriel.net</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="Miriel.net - みりえるどっとねっとは、学生であるMirielの個人サイトです。主に CherryPick Fork RosekeyのLead Developer, Miriel Systems の代表として活動しています。">
    <meta name="keywords" content="Miriel, CherryPick Fork, Rosekey, Miriel Systems, プログラミング, ガジェット">
    <meta name="author" content="Miriel">
    <link href="./Play-Bold.ttf" rel="stylesheet">
    <style>
        /* 圧縮後のCSS */
        html, body { height: 100%; margin: 0; padding: 0; font-family: 'Play', sans-serif; background: #f0f8ff; color: #333; display: flex; flex-direction: column; justify-content: space-between; text-align: center; }
        header { background: #1e90ff; color: white; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; width: 100%; top: 0; }
        header img { height: 50px; border-radius: 50%; }
        header .title { display: flex; flex-direction: column; align-items: center; }
        nav { display: flex; flex-wrap: wrap; justify-content: center; }
        nav a { color: white; text-decoration: none; margin: 10px; flex-basis: 100px; min-width: 100px; text-align: center; }
        footer { background: #1e90ff; color: white; text-align: center; padding: 10px 0; position: fixed; width: 100%; bottom: 0; }
        h4 { animation: fadeIn 2s ease-in-out; }
        table { animation: slideIn 2s ease-in-out; margin: auto; width: 90%; max-width: 800px; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes slideIn { from { transform: translateX(-100%); } to { transform: translateX(0); } }
        @media (max-width: 600px) {
            header { flex-direction: column; align-items: center; padding: 10px 0; }
            .logo-title { margin-bottom: 10px; display: flex; flex-direction: column; align-items: center; }
            header img { margin-bottom: 10px; }
            nav { margin-top: 10px; }
            nav a { margin: 5px 0; padding: 5px 10px; }
            header .title { text-align: center; }
            header .title .subtitle { font-size: 10px; }
        }
        .link-banner { margin: 20px 0; animation: fadeInLink 3s ease-in-out; }
        .link-banner img { width: 100%; max-width: 300px; border-radius: 10px; transition: transform 0.3s ease-in-out; }
        .link-banner img:hover { transform: scale(1.05); }
        @keyframes fadeInLink { from { opacity: 0; } to { opacity: 1; } }
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
