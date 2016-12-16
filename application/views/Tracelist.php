<?php
    $session = Session::instance();
    $uid = $session->get('id', 0);
?>

<html>
    <head>
        <title>LISTA TRAS</title>
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
                height: 350px;
                text-align: center;
            }
            .lista_wycieczek{
                margin-top: 30px;
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
            .panel_dolny_2-1{
                width: 25%;
                height: 100px;
                float: left;
                background-color: orange;
                text-align: center;
            }
            .panel_dolny_2-2{
                width: 25%;
                height: 100px;
                float: left;
                background-color: orange;
                text-align: center;
            }
            .panel_dolny_2-3{
                width: 25%;
                height: 100px;
                float: left;
                background-color: orange;
                text-align: center;
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
        <div class="panel_gorny">
           <p class="panel_gorny_tekst">LISTA TRAS</p>
        </div>
        <form method="post">
            <div class="panel_srodkowy">
                <div class="lista_wycieczek">
                    <p>Lista tras użytkownika:</p>
                    <?php if(isset($wycieczki)) { ?>
                        <select name="id_wycieczki" size="10">
                            <?php foreach($wycieczki as $wycieczka) { ?>
                            <option value="<?=$wycieczka->id_wycieczki?>"><?=$wycieczka->nazwa_wycieczki?></option>
                            <?php } ?>
                        </select>
                    <?php } else { ?>Nie znaleziono wycieczek spełniających podane kryteria<?php } ?>
                </div>
            </div>
            <div class="panel_dolny_2-1">
                <div class="obiekt_przycisku">
                    <a href="../Userpanel" class="przycisk">POWRÓT NA POPRZEDNIĄ STRONĘ</a>
                </div>
            </div>
            <div class="panel_dolny_2-2">
                <div class="obiekt_przycisku">
                    <?=isset($wycieczki)?'<input formaction="../Userpanel/trace" type="submit" value="DETALE" class="przycisk">':''?>
                </div>
            </div>
            <div class="panel_dolny_2-2">
                <div class="obiekt_przycisku">
                    <?=$uid?'<input formaction="../Userpanel/remove" type="submit" value="USUŃ TRASĘ" class="przycisk">':''?>
                </div>
            </div>
        </form>
        <div class="panel_dolny_2-3">
            <div class="obiekt_przycisku">
                <?=$uid?'<a href="../Login/logout" class="przycisk">WYLOGUJ</a>':''?>
            </div>
        </div>
        <div class="panel_dolny">
            <p class="panel_dolny_tekst">E-mail do administratora: administrator@abcdefg.pl</p>
        </div>
    </body>
</html>
