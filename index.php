<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みりえるどっとねっと</title>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Play', sans-serif;
            color: white;
            background-color: black;
            text-align: center;
        }
        .section {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 1s, transform 1s;
        }
        .section.active {
            opacity: 1;
            transform: translateY(0);
        }
        .section:not(.active) {
            transform: translateY(100px);
        }
        .arrow {
            margin-top: 20px;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div id="home" class="section active">
        <h1>みりえるどっとねっと</h1>
        <p>Mirielのサイトへようこそ。</p>
        <p>下にスクロールしてください</p>
        <div class="arrow">↓</div>
    </div>
    <div id="about" class="section">
        <h1>About Me</h1>
        <p>Miriel は 2014年 からTwitter(現 X) で活動を開始した人である。<br>
           主に プログラム関連などでやっている。今現在は RosekeyというSNS の Developerもしている。<br>
           今は Twitter(現 X) / Rosekey (ActivityPub) / TikTok / Instagram などで活動をしている。</p>
        <h3>実績</h3>
        <p>
            2020/08 ~ 2021/02 37ch Developers Member<br>
            2021/03 ~ 2023/04 Mirial.jp Read Developer<br>
            2023/09 ~ 2023/10 Sharkey Contributor<br>
            2024/01 ~  Rosekey Read Developer<br>
            2024/06 ~  CherryPick Contributor
        </p>
    </div>
    <div id="accounts" class="section">
        <h1>Accounts</h1>
        <p>
            X (旧 Twitter): @mirielnet (<a href="https://x.com/mirielnet" target="_blank" rel="noopener noreferrer">https://x.com/mirielnet</a>)<br>
            Rosekey (ActivityPub): @miriel@p0.waka.style (<a href="https://p0.waka.style/@miriel" target="_blank" rel="noopener noreferrer">https://p0.waka.style/@miriel</a>)<br>
            GitHub (Git): @mirielnet (<a href="https://github.com/mirielnet" target="_blank" rel="noopener noreferrer">https://github.com/mirielnet</a>)<br>
            TikTok: @mirielnet (<a href="https://tiktok.com/@mirielnet" target="_blank" rel="noopener noreferrer">https://tiktok.com/@mirielnet</a>)<br>
            Instagram: @mirielnet (<a href="https://instagram.com/mirielnet" target="_blank" rel="noopener noreferrer">https://instagram.com/mirielnet</a>)<br>
            E-Mail: contact@waka.style or me@miriel.net
        </p>
    </div>
    <footer>
        Copyright © 2014-2024 Miriel(@mirielnet) All Rights Reserved.
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var sections = $('.section');
            var currentIndex = 0;

            $(window).on('wheel', function(event) {
                if(event.originalEvent.deltaY > 0) {
                    // Down scroll
                    if (currentIndex < sections.length - 1) {
                        currentIndex++;
                        updateSections();
                    }
                } else {
                    // Up scroll
                    if (currentIndex > 0) {
                        currentIndex--;
                        updateSections();
                    }
                }
            });

            function updateSections() {
                sections.removeClass('active');
                sections.eq(currentIndex).addClass('active');
            }
        });
    </script>
</body>
</html>
