<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miriel - Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: 'Play', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .headline {
            font-size: 2rem;
            text-align: center;
        }

        .text-swap {
            display: inline-block;
            animation: fadeSwap 6s infinite;
        }

        @keyframes fadeSwap {
            0%, 20%, 100% { opacity: 1; }
            45%, 55% { opacity: 0; }
        }

        .corner-text {
            position: fixed;
            bottom: 10px;
            right: 10px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="headline">
        <div class="text-swap" id="text1">Miriel - @mirielnet</div>
        <div class="text-swap" id="text2" style="display: none;">Coming Soon...</div>
    </div>
    <div class="corner-text">@mirielnet</div>
    <script>
        const text1 = document.getElementById('text1');
        const text2 = document.getElementById('text2');
        setInterval(() => {
            if (text1.style.display === 'none') {
                text1.style.display = 'inline-block';
                text2.style.display = 'none';
            } else {
                text1.style.display = 'none';
                text2.style.display = 'inline-block';
            }
        }, 6000); // Duration of the animation cycle
    </script>
</body>
</html>
