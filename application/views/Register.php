<html>
    <head>
        <title>Adventure - rejestracja</title>
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
                width: 100%;
                height: 550px;
                float: left;
                float: top;
                background-color: orange;
                text-align: center;
            }
            .formularz1{
               margin-top: 20px;
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
                margin-top: 20px;
            }
            .panel_dolny{
                width: 100%;
                height: 100px;
                float: left;
                background-color: cadetblue;
            }
            .panel_dolny_tekst{
                margin-top: 40px;
                text-align: center;
                font: 15px Georgia;
            }
        </style>
        <!--PANEL GORNY-->
        <div class="panel_gorny">
            <p class="panel_gorny_tekst">PANEL REJESTRACJI NOWEGO UŻYTKOWNIKA</p>
        </div>
        <!--PANEL SRODKOWY-->
        <div class="panel_srodkowy">            
                <form action="Register" method="post" class="formularz1">
                    Podaj login do serwisu:
                    <br>
                    <input name="login" type="text" required>
                    <br>
                    Podaj hasło:
                    <br>
                    <input name="haslo" type="password" required>
                    <br>
                    Powtórz hasło:
                    <br>
                    <input name="haslo2" type="password" required>
                    <br>
                    Podaj e-mail:
                    <br>
                    <input name="e-mail" type="text" required>
                    <br>
                    Podaj imię:
                    <br>
                    <input name="imie" type="text" required>
                    <br>
                    Podaj nazwisko:
                    <br>
                    <input name="nazwisko" type="text" required>
                    <br>
                    Podaj wiek:
                    <br>
                    <input name="wiek" type="text" required>
                    <br>
                    Ubezpieczony:
                    <input type="checkbox" name="ubezpieczenie" value="1">
                    <br>
                    Numer paszportu:
                    <br>
                    <input name="nr_paszportu" type="text" required>
                    <br>
                    <input type="submit" value="ZATWIERDŹ DANE" class="przycisk">
                </form>
            <div class="obiekt_przycisku">
                <br>
                <a href="/Login" class="przycisk">POWRÓT NA POPRZEDNIĄ STRONĘ</a>
            </div>
        </div>
        <!--PANEL DOLNY-->
        <div class="panel_dolny">
            <p class="panel_dolny_tekst">E-mail do administratora: administrator@abcdefg.pl</p>
        </div>
    </body>
</html>
