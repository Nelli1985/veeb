<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 12/14/2017
 * Time: 1:25 PM
 */

for($arv = 1; $arv <= 10; $arv++) { /* suurendab väärtust ühe võrra*/
    if($arv % 2 == 0){
        $varv = 'blue';
    } else {
        $varv = 'red';
    }
    echo '<font color="'.$varv.'">'.$arv.'</font><br />';
}

//

$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
