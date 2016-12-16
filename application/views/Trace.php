<?php
    $etapy = $wycieczka->etap->find_all();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SZCZEGÓŁY WYCIECZKI</title>
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
                height: 400px;
                float: left;
                float: top;
                background-color: orange;
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
            .tabela{
                margin-top: 30px;
            }
            table, th, td {
                border: 3px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
            }
            th{
                background-color: blanchedalmond;
            }
            td{
                background-color: lightgray;
            }
            h2, h4 {
                margin-left: 30px;
            }
            hr {
                width: 95%;
            }
        </style>
        <!--PANEL GORNY-->
        <div class="panel_gorny">
            <p class="panel_gorny_tekst">SZCZEGÓŁY WYCIECZKI</p>
        </div>
        <!--PANEL SRODKOWY-->
        <div class="panel_srodkowy">
            
            <h2><?=$wycieczka->nazwa_wycieczki?></h2><hr>
            <h4>Biuro podrozy: <?=$wycieczka->biuro_podrozy?></h4>
            <div class="tabela">
                <table style="width:100%">
                    <tr>
                        <th>Data rozpoczęcia</th>
                        <th>Data zakończenia</th>
                        <th>Cena</th>
                        <th>Nazwa hotelu</th>
                        <th>Miejsce</th>
                        <th>Ilość nocy / Cena</th>
                        <th>Pożywienie</th>
                        <th>Gwiazdek</th>
                    </tr>
                    <?php foreach($etapy as $etap) { 
                        $miasto = $etap->miasto->find();
                        $nocleg = $miasto->nocleg->find();
                        ?>
                    <tr>
                        <td><?=$etap->data_rozpoczecia?> <?=$etap->godzina_rozpoczecia?></td>
                        <td><?=$etap->data_zakonczenia?> <?=$etap->godzina_zakonczenia?></td>
                        <td><?=$etap->cena?> zł</td>
                        <td><?=$nocleg->nazwa_hotelu?></td>
                        <td><?=$miasto->kraj?>, <?=$miasto->miasto?> (<?=$miasto->powiat?>)</td>
                        <td><?=$nocleg->ilosc_nocy?> / <?=$nocleg->cena_noclegu?> zł</td>
                        <td><?=$nocleg->pozywienie?></td>
                        <td><?=$nocleg->gwiazdek?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <!--PANEL DOLNY-->
        <div class="panel_dolny">
            <p class="panel_dolny_tekst">E-mail do administratora: administrator@abcdefg.pl</p>
        </div>
    </body>
</html>
