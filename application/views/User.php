<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PANEL UŻYTKOWNIKA SERWISU</title>
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
            .panel_lewy{
                width: 50%;
                height: 400px;
                float: left;
                float: top;
                background-color: orange;
                text-align: center;
            }
            .panel_prawy{
                width: 50%;
                height: 400px;
                float: top;
                float: left;
                background-color: orange;
                text-align: center;
            }
            .lista{
                margin-top: 50px; 
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
            <p class="panel_gorny_tekst">PANEL UŻYTKOWNIKA SERWISU</p>
        </div>
        <!--PANEL LEWY-->
        <div class="panel_lewy">
            
            <div class="obiekt_przycisku">
                <a href="../Userpanel/add" class="przycisk">DODAJ TRASĘ</a>
            </div>
            <div class="obiekt_przycisku">
                <a href="../Userpanel/list" class="przycisk">LISTA TRAS</a>
            </div>
            <div class="obiekt_przycisku">
                <a href="../Login/logout" class="przycisk">WYLOGUJ</a>
            </div>
        </div>
        <!--PANEL PRAWY-->
        <div class="panel_prawy">
            <form action="../Userpanel/list" method="get" class="lista">
                Wyszukaj wycieczkę:<br>
                Data:<br>
                <input name="date" type="date">
                <br>
                Miejscowość:<br>
                <input name="place" type="text">
                <div class="obiekt_przycisku">
                    <input type="submit" value="WYSZUKAJ" class="przycisk">
                </div>
            </form>
        </div>
        <div class="panel_dolny">
            <p class="panel_dolny_tekst">E-mail do administratora: administrator@abcdefg.pl</p>
        </div>
    </body>
</html>
