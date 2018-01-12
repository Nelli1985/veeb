<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 1/12/2018
 * Time: 8:47 AM
 */

$opilane = array(
    'eesnimi' =>'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' =>9
);

echo '<pre>';
print_r($opilane);
echo '<pre>';

foreach ($opilane as $vaartus) {
    echo $vaartus.'<br />';
}

foreach ($opilane as $element => $vaartus) {
    echo $element.' - '.$vaartus.'<br />';

}