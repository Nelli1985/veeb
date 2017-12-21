<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 12/21/2017
 * Time: 2:20 PM
 */

$arvud = array(); // luuakse tühi massiiv
// lisame väärtused
$arvud[] = 5;
$arvud[] = 1;
$arvud[] = 4;
$arvud[] = 2;
$arvud[] = 3;

// kuidas luua juba väärtusega massiivi
$arvud1 = array (1, 2, 3, 4, 5);


echo '<pre>';
print_r($arvud);
echo '</pre>';

// korralik väljastus
for ($i = 0; $i < count($arvud); $i++) {
    echo '<b>'.$arvud[$i].'</b><br />';
}

foreach ($arvud1 as $arv){
    echo '<i>'.$arv.'</i><br />';
}
