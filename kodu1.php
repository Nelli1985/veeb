<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 12/14/2017
 * Time: 2:31 PM
 */

function arvuSumma ($arv)
{
    // muutuja summa väärtuseks on null
    $summa = 0;

    // leitakse arvu jääk 10-ga jagamisel ja liidetakse see summale
    do {
        $summa += $arv % 10;
        // seejuures on uueks arvuks arvu
        // 10-ga jagamise täisosa
    } while ($arv = (int)$arv / 10);
    // väljastatakse lõplik numbrite summa
    echo 'Sum of the digits of this random number is: '.$summa.'<br />';
}

$juhuarv = rand();
echo 'Random number is: '.$juhuarv.'<br />';
// funktsiooni rakendamine suvalise numbrigs
arvuSumma($juhuarv);

//

function otsiNumber($arv, $kindelarv) {

    // muutuja summa väärtuseks on null
    $summa = 0;
    do {
        if($arv % 10 == $kindelarv) {
            $summa += 1;
            continue;
        }
        // seejuures on uueks arvuks arvu
        // 10-ga jagamise täisosa
    } while ($arv = (int)$arv / 10);
    // väljastatakse lõplik kindla arvu esinemise summa
    echo 'In this random number you can count digit '.$kindelarv.': '.$summa.' times.';
}

otsiNumber($juhuarv, 5);