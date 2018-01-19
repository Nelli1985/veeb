<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 12/14/2017
 * Time: 2:31 PM
 */
function tabel ($sona1, $sona2, $sona3, $sona4) {
    echo '<table border="1">';
        for($rida = 1; $rida <= 4; $rida++) {
            echo '<tr>';
                echo '<td>';
                    echo ${'sona'}.$rida;
                echo '</td>';
            echo '</tr>';
        }
    echo '</table>';
}

tabel('Kui on rohkem küsimusi', 'pole', 'siis ma võin', 'lubada teid koju');