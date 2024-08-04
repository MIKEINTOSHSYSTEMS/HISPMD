<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Countdown</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/dist/flipdown.min.css">
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            height: 100%;
            display: flex;
            align-items: center;
            align-content: space-around;
            font-family: 'Roboto', sans-serif;
            transition: all .2s ease-in-out;
            background-color: #f0f0f0;
        }

        body.light-theme {
            background-color: #151515;
        }

        body.light-theme .example h1,
        body.light-theme .example p,
        body.light-theme .example .button {
            color: #FFFFFF;
        }

        body.light-theme .example .buttons .button {
            color: #FFFFFF;
            border-color: #FFFFFF;
        }

        body.light-theme .example .buttons .button:hover {
            color: #151515;
            background-color: #FFFFFF;
        }

        .example {
            width: 550px;
            height: 378px;
            margin: auto;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .example .flipdown {
            margin: auto;
        }

        .example h1 {
            font-weight: 100;
            font-size: 3em;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .example h2 {
            font-weight: 100;
            margin-top: 0;
            margin-bottom: 35px;
        }

        .example .buttons {
            width: 100%;
            height: 50px;
            margin: 50px auto 0;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .example .buttons p {
            height: 50px;
            line-height: 50px;
            font-weight: 400;
            padding: 0 25px 0 0;
            color: #333;
            margin: 0;
        }

        .example .button {
            display: inline-block;
            height: 50px;
            box-sizing: border-box;
            line-height: 46px;
            text-decoration: none;
            color: #333;
            padding: 0 20px;
            border: solid 2px #333;
            border-radius: 4px;
            text-transform: uppercase;
            font-weight: 700;
            transition: all .2s ease-in-out;
        }

        .example .button:hover {
            background-color: #333;
            color: #FFF;
        }

        .example .button i {
            margin-right: 5px;
        }

        @media(max-width: 550px) {
            .example {
                width: 100%;
                height: 362px;
            }

            .example h1 {
                font-size: 2.5em;
            }

            .example h2 {
                margin-bottom: 25px;
            }

            .example .buttons {
                width: 100%;
                margin-top: 25px;
                text-align: center;
                display: block;
            }

            .example .buttons p,
            .example .buttons a {
                float: none;
                margin: 0 auto;
            }

            .example .buttons p {
                padding-right: 0;
            }

            .example .buttons a {
                display: inline-block;
            }
        }
    </style>
</head>
<body>
    <div class="example">
        <h1>Countdown</h1>
        <div id="flipdown" class="flipdown"></div>
        <h2>Time remaining until the Launch Date:</h2>
        <div class="buttons">
            <p id="ver"></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/src/flipdown.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get the current date and time
            const now = new Date();

            // Calculate the target date
            const targetDate = new Date(now.getFullYear(), now.getMonth() + 3, now.getDate() + 0, now.getHours() + 0);

            // Convert target date to Unix timestamp (in seconds)
            const targetTimestamp = Math.floor(targetDate.getTime() / 1000);

            // Set up FlipDown
            const flipdown = new FlipDown(targetTimestamp)
                // Start the countdown
                .start()
                // Do something when the countdown ends
                .ifEnded(() => {
                    console.log('The countdown has ended!');
                });

            // Toggle theme
            setInterval(() => {
                let body = document.body;
                body.classList.toggle('light-theme');
                body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
                body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
            }, 50000); //5000

            // Display FlipDown version
            //const ver = document.getElementById('ver');
            //ver.innerHTML = flipdown.version;
        });
    </script>
</body>
</html>
