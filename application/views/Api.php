<?php
    foreach($wycieczki as $wycieczka)
    {
?>
    <?php
        $etapy = $wycieczka->etap->find_all();
    ?>

    nazwa_wycieczki:<?=$wycieczka->nazwa_wycieczki?>,
    biuro_podrozy:<?=$wycieczka->biuro_podrozy?>

    <?php foreach($etapy as $etap) { ?>
        ,data_rozpoczecia:<?=$etap->data_rozpoczecia?>,
        data_zakonczenia:<?=$etap->data_zakonczenia?>,
        cena:<?=$etap->cena?>,
        odleglosc:<?=$etap->odleglosc?>,
        godzina_rozpoczecia:<?=$etap->godzina_rozpoczecia?>,
        godzina_zakonczenia:<?=$etap->godzina_zakonczenia?>,

        <?php $miasto = $etap->miasto->find(); ?>

        kraj:<?=$miasto->kraj?>,
        miasto:<?=$miasto->miasto?>,
        powiat:<?=$miasto->powiat?>,

        <?php $nocleg = $miasto->nocleg->find(); ?>

        ilosc_nocy:<?=$nocleg->ilosc_nocy?>,
        cena:<?=$nocleg->cena_noclegu?>,
        gwiazdek:<?=$nocleg->gwiazdek?>,
        pozywienie:<?=$nocleg->pozywienie?><?php } ?>; <?php } ?>
        