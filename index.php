<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #ccffff; /* Adjust as needed */
            z-index: 1000; /* Ensure it stays on top */
        }

        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 60px; /* To account for the fixed header */
            z-index: 1; /* Ensure it's below the header */
        }

        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 50px; /* To account for the fixed chatbot */
            z-index: 1; /* Ensure it's below the header */
        }

        .bot {
            margin: 0;
            position: fixed;
            bottom: 0;
            right: 0;
            z-index: 1000; /* Ensure it stays on top */
        }

        .c {
            margin-top: -5rem;
        }

        .t {
           
            text-align: center;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
                align-items: center;
                padding-top: 80px; /* More padding for smaller screens */
            }

            .t {
                margin-top: -10rem;
                margin-left: 0;
                position: relative;
                text-align: center;
            }

            .bot {
                bottom: 0;
                right: 0;
                width: 100%;
                text-align: center;
                padding: 10px;
            }
        }
    </style>
    <title>OM BAGESHWARAY NAMAH</title>
</head>
<body>
    <header>
        <?php include 'nav.html'; ?>
    </header>
    <main>
        <div class="c">
            <?php include 'carousel.html'; ?>
        </div>
    </main>
    <footer>
        <div>
            <h3 class="t">Follow link for updates : <a href="https://classroom.google.com/c/NjcxNzI5NDk1MjAw?cjc=qu3ntwn" target="_blank">click here</a></h3>
        </div>
        <div>
            <?php include 'character.html'; ?>
        </div>
        <div class="bot">
            <?php include 'bot.html'; ?>
        </div>
    </footer>
</body>
</html>
