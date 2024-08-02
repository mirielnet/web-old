<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miriel - Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, .headline {
            font-family: 'Play', sans-serif;
        }

        .headline {
            font-size: 2rem;
            text-align: center;
            margin-top: 20%;
        }

        .text-swap {
            display: inline-block;
            animation: fadeSwap 3s infinite;
        }

        @keyframes fadeSwap {
            0%, 100% { opacity: 1; }
            45%, 55% { opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="headline">
            <div class="text-swap" id="text1">Miriel - @mirielnet</div>
            <div class="text-swap" id="text2" style="display: none;">Coming Soon...</div>
        </div>
    </div>
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
        }, 3000);
    </script>
</body>
</html>
