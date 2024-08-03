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
            background-color: black;
            color: white;
            font-family: 'Play', sans-serif;
            overflow: hidden;
        }
        .section {
            display: none;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
            flex-direction: column;
        }
        .active {
            display: flex;
        }
        h1, h2, h3 {
            margin: 0.5em 0;
        }
        .scroll-down {
            font-size: 2rem;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }
        .content {
            padding: 2rem;
        }
        footer {
            padding: 1rem;
            background-color: #111;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="section active">
        <h1>みりえるどっとねっと</h1>
        <h2>Ｍｉｒｉｅｌのサイトへようこそ。</h2>
        <p>下にスクロールしてください</p>
        <div class="scroll-down">↓</div>
    </div>

    <div class="section" id="about-me">
        <h2>About Me</h2>
        <div class="content">
            <p>Miriel は 2014年 からTwitter(現 X) で活動を開始した人である。主に プログラム関連などでやっている。今現在は RosekeyというSNS の Developerもしている。</p>
            <p>今は Twitter(現 X) / Rosekey (ActivityPub) / TikTok / Instagram などで活動をしている。</p>
            <h3>実績</h3>
            <ul>
                <li>2020/08 ~ 2021/02 37ch Developers Member</li>
                <li>2021/03 ~ 2023/04 Mirial.jp Read Developer</li>
                <li>2023/09 ~ 2023/10 Sharkey Contributor</li>
                <li>2024/01 ~  Rosekey Read Developer</li>
                <li>2024/06 ~  CherryPick Contributor</li>
            </ul>
        </div>
    </div>

    <div class="section" id="accounts">
        <h2>Accounts</h2>
        <div class="content">
            <p>X (旧 Twitter): <a href="https://x.com/mirielnet" target="_blank" style="color: white;">@mirielnet</a></p>
            <p>Rosekey (ActivityPub): <a href="https://p0.waka.style/@miriel" target="_blank" style="color: white;">@miriel@p0.waka.style</a></p>
            <p>GitHub (Git): <a href="https://github.com/mirielnet" target="_blank" style="color: white;">@mirielnet</a></p>
            <p>TikTok: <a href="https://tiktok.com/@mirielnet" target="_blank" style="color: white;">@mirielnet</a></p>
            <p>Instagram: <a href="https://instagram.com/mirielnet" target="_blank" style="color: white;">@mirielnet</a></p>
            <p>E-Mail: <a href="mailto:contact@waka.style" style="color: white;">contact@waka.style</a> or <a href="mailto:me@miriel.net" style="color: white;">me@miriel.net</a></p>
        </div>
    </div>

    <footer>
        Copyright © 2014-2024 Miriel(@mirielnet) All Rights Reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            var scroll = 0;
            const sections = $('.section');
            const fadeTime = 500; // フェードイン/フェードアウトの時間（ミリ秒）
            let currentSectionIndex = 0;

            function showSection(index) {
                sections.fadeOut(fadeTime); // 全てのセクションをフェードアウト
                sections.eq(index).fadeIn(fadeTime); // 指定されたセクションをフェードイン
            }

            $(window).on('scroll', function() {
                var newScroll = $(this).scrollTop();
                if (newScroll < scroll) {
                    // 上スクロールの時の処理
                    if (currentSectionIndex > 0) {
                        currentSectionIndex--;
                        showSection(currentSectionIndex);
                    }
                } else {
                    // 下スクロールの時の処理
                    if (currentSectionIndex < sections.length - 1) {
                        currentSectionIndex++;
                        showSection(currentSectionIndex);
                    }
                }
                scroll = newScroll;
            });

            showSection(currentSectionIndex); // 最初のセクションを表示
        });
    </script>
</body>
</html>
