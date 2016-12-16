<html>
    <head>
        <title>EKRAN LOGOWANIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <style>
            .panel_gorny{
                height: 100px;
                background-color: cadetblue;
            }
            .panel_gorny_tekst{
                margin: auto;
                text-align: center;
                font: 28px Impact;
            }
            .panel_srodkowy{
                background-color: orange;
                float: left;
                float: top;
                width: 100%;
                height: 400px;
                text-align: center;
            }
            #lista{
                padding-top: 50px;
            }
            .przycisk{
                background-color: steelblue;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                box-shadow: 4px 4px 2px #442222;
            }
            .obiekt_przycisku{
                margin-top: 30px;
            }
            .panel_dolny{
                float: left;
                width: 100%;
                height: 100px;
                background-color: cadetblue;
            }
            .panel_dolny_tekst{
                text-align: center;
                font: 15px Georgia;
            }
        </style>
        <!--PANEL GÓRNY-->
        <div class="panel_gorny">
            <p class="panel_gorny_tekst">EKRAN LOGOWANIA</p>
        </div>
        
        <!--PANEL SRODKOWY-->
        <div class="panel_srodkowy">
            <form action="/Login" method="post">
                <div id="lista">
                    LOGIN: <input name="login" type="text"><br/>
                    HASŁO: <input name="haslo" type="password">
                <div class="obiekt_przycisku">
                    <input type="submit" value="ZALOGUJ" class="przycisk">
                </div>
                </div>
                <a href="../Userpanel">Wejdź jako gość</a>
            </form>
            <div class="obiekt_przycisku">
                <a href="/Register" class="przycisk">NOWY UŻYTKOWNIK</a>
            </div>
            <?=isset($invalid)?'<br>Nieprawidłowe dane!':''?>
        </div>
        
        <!--PANEL DOLNY-->
        <div class="panel_dolny">
            <p class="panel_dolny_tekst">E-mail do administratora: administrator@abcdefg.pl</p>
        </div>
    </body>
</html>
