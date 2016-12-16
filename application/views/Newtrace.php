<html>
    <head>
        <title>DANE TRASY</title>
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
                height: 420px;
                float: left;
                float: top;
                background-color: orange;
                text-align: center;
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
            .panel_dolny_2-1{
                width: 34%;
                height: 100px;
                float: left;
                background-color: orange;
                text-align: center;
            }
            .panel_dolny_2-2{
                width: 32%;
                height: 100px;
                float: left;
                background-color: orange;
                text-align: center;
            }
            .panel_dolny_2-3{
                width: 34%;
                height: 100px;
                float: left;
                background-color: orange;
                text-align: center;
            }
            .panel_dolny_tekst{
                margin-top: 40px;
                text-align: center;
                font: 15px Georgia;
            }
            .pole_tekstowe{
                resize: none;
            }
            .lewa_strona{
                text-align: center;
            }
            table{
                float: left;
            }
        </style>
            <!--PANEL GORNY-->
        <div class="panel_gorny">
            <p class="panel_gorny_tekst">DANE NOWEJ TRASY</p>
        </div>
            <!--PANEL LEWY-->
        <form method="post">
            <div class="panel_srodkowy">
                <div>
                    <table>
                        <tr>
                            <th></th>
                            <th>Dzień</th>
                            <th>Miesiąc</th>
                            <th>Rok</th>
                            <th>Godzina</th>
                        </tr>
                        <tr>
                            <td>Data rozpoczęcia</td>
                            <td><input name="data_rozpoczecia_d" type="text"></td>
                            <td><input name="data_rozpoczecia_m" type="text"></td>
                            <td><input name="data_rozpoczecia_y" type="text"></td>
                            <td><input name="godzina_rozpoczecia" type="text"></td>
                        </tr>
                        <tr>
                            <td>Data zakończenia</td>
                            <td><input name="data_zakonczenia_d" type="text"></td>
                            <td><input name="data_zakonczenia_m" type="text"></td>
                            <td><input name="data_zakonczenia_y" type="text"></td>
                            <td><input name="godzina_zakonczenia" type="text"></td>
                        </tr>
                        <tr>
                            <td>Państwo:</td>
                            <td><input name="kraj" type="text"></td>
                        </tr>
                        <tr>
                            <td>Miasto:</td>
                            <td><input name="miasto" type="text"></td>
                        </tr>
                        <tr>
                            <td>Powiat:</td>
                            <td><input name="powiat" type="text"></td>
                        </tr>
                        <tr>
                            <td>Nazwa hotelu:</td>
                            <td><input name="nazwa_hotelu" type="text"></td>
                        </tr>
                        <tr>
                            <td>Standard hotelu:</td>
                            <td colspan="2"><label><input type="radio" name="gwiazdek" value="1">*</label>
                                <label><input type="radio" name="gwiazdek" value="2">**</label>
                                <label><input type="radio" name="gwiazdek" value="3">***</label>
                                <label><input type="radio" name="gwiazdek" value="4">****</label>
                                <label><input type="radio" name="gwiazdek" value="5">*****</label></td>
                        </tr>
                        <tr>
                            <td>Cena hotelu:</td>
                            <td><input name="cena_noclegu" type="text"></td>
                        </tr>
                        <tr>
                            <td>Ilość nocy spędzonych:</td>
                            <td><input name="ilosc_nocy" type="text"></td>
                        </tr>
                        <tr>
                            <td>Cena etapu wycieczki:</td>
                            <td><input name="cena" type="text"></td>
                        </tr>
                    </table>
                    <div class="lewa_strona">
                        <label>Uwagi - pożywienie:</label>
                        <br>
                        <textarea name="pozywienie" class="pole_tekstowe" cols="40" rows="15"></textarea>
                        <br>
                        <br>
                        <div style="text-align:right;margin-right:320px">
                            Nazwa wycieczki: <input <?=isset($nowyetap)?'readonly value="'.$nazwa_wycieczki.'"':''?> name="nazwa_wycieczki" type="text"><br>
                            Nazwa biura podróży: <input <?=isset($nowyetap)?'readonly value="'.$biuro_podrozy.'"':''?> name="biuro_podrozy" type="text">
                        </div>
                    </div>
                    <div class="obiekt_przycisku">
                        <input formaction="../Userpanel/add" type="submit" value="NASTĘPNY ETAP" class="przycisk">
                    </div>
                </div>
            </div>
                <!--PANEL DOLNY 2-->
            <div class="panel_dolny_2-1">
                <div class="obiekt_przycisku">
                    <a href="../Userpanel" class="przycisk">POWRÓT NA POPRZEDNIĄ STRONĘ</a>
                </div>
            </div>
            <div class="panel_dolny_2-2">
                <div class="obiekt_przycisku">
                    <a href="../Login/logout" class="przycisk">WYLOGUJ</a>
                </div>
            </div>
            <div class="panel_dolny_2-3">
                <div class="obiekt_przycisku">
                    <input formaction="../Userpanel/addfinal" type="submit" value="ZATWIERDŹ ZMIANY" class="przycisk">
                </div>
            </div>
        </form>
        <div class="panel_dolny">
            <p class="panel_dolny_tekst">E-mail do administratora: administrator@abcdefg.pl</p>
        </div>
    </body>
</html>
