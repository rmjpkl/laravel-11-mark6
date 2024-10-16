<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Embed Google Spreadsheet</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f0f0;
            }

            .container {
                width: 100%;
                height: 100vh;
                margin: 0;
                padding: 0;
                background-color: #fff;
                overflow: hidden;
            }

            iframe {
                width: 210%;
                height: 600%;
                border: none;
            }

            @media (max-width: 768px) {
                .container {
                    height: 100vh;
                }

                iframe {
                    transform: scale(0.48);
                    transform-origin: top left;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <iframe
                src="https://docs.google.com/spreadsheets/d/174H6gvvzPobzK5Ij8l6aKnj_hlUPaEmYCZ-DiAYuVOs/pubhtml?gid=3418829&single=true"
                frameborder="0"
            ></iframe>
        </div>
    </body>
</html>
