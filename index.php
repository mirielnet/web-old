<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みりえるどっとねっと</title>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: black;
            color: white;
            font-family: 'Play', sans-serif;
        }

        section {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
        }

        #intro { z-index: 3; }
        #about-me { z-index: 2; }
        #accounts { z-index: 1; }

        h1, h2 {
            margin: 0;
        }

        .scroll-indicator {
            font-size: 2em;
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
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <section id="intro">
        <div>
            <h1>みりえるどっとねっと</h1>
            <h2>Mirielのサイトへようこそ。</h2>
            <p>下にスクロールしてください</p>
            <div class="scroll-indicator">↓</div>
        </div>
    </section>

    <section id="about-me" style="display: none;">
        <div>
            <h1>About Me</h1>
            <p>Miriel は 2014年 からTwitter(現 X) で活動を開始した人である。主にプログラム関連などでやっている。今現在は RosekeyというSNS の Developerもしている。今は Twitter(現 X) / Rosekey (ActivityPub) / TikTok / Instagram などで活動をしている。</p>
            <h3>実績</h3>
            <p>
                2020/08 ~ 2021/02 37ch Developers Member<br>
                2021/03 ~ 2023/04 Mirial.jp Read Developer<br>
                2023/09 ~ 2023/10 Sharkey Contributor<br>
                2024/01 ~ Rosekey Read Developer<br>
                2024/06 ~ CherryPick Contributor
            </p>
        </div>
    </section>

    <section id="accounts" style="display: none;">
        <div>
            <h1>Accounts</h1>
            <p>X (旧 Twitter): @mirielnet (https://x.com/mirielnet)<br>
            Rosekey (ActivityPub): @miriel@p0.waka.style (https://p0.waka.style/@miriel)<br>
            GitHub (Git): @mirielnet (https://github.com/mirielnet)<br>
            TikTok: @mirielnet (https://tiktok.com/@mirielnet)<br>
            Instagram: @mirielnet (https://instagram.com/mirielnet)<br>
            E-Mail: contact@waka.style or me@miriel.net
            </p>
        </div>
    </section>

    <footer>
        Copyright © 2014-2024 Miriel(@mirielnet) All Rights Reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Document is ready");

            var currentIndex = 0;
            var sections = ['#intro', '#about-me', '#accounts'];
            var totalSections = sections.length;

            function showSection(index) {
                $(sections[currentIndex]).fadeOut(500, function() {
                    $(sections[index]).fadeIn(500);
                    currentIndex = index;
                    console.log("Showing section index: " + currentIndex);
                });
            }

            $(window).on('wheel', function(e) {
                if (e.originalEvent.deltaY > 0) {
                    // Down scroll
                    if (currentIndex < totalSections - 1) {
                        showSection(currentIndex + 1);
                    }
                } else {
                    // Up scroll
                    if (currentIndex > 0) {
                        showSection(currentIndex - 1);
                    }
                }
            });

            // 初期表示設定
            $(sections[currentIndex]).show();
        });
    </script>
</body>
</html>
