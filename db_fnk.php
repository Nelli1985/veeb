<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 1/19/2018
 * Time: 12:30 PM
 */

require_once 'db_conf.php'; // nõuame konfiguratsioonifaili sisu kasutamist

// andmebaasi serveriga ühendamine ja
// andmebaasi valik
function yhendus() {
    $yhendus = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(!$yhendus){
        echo 'Puudub ühendus andmebaasi serveriga<br/>'; // kasutaja rahustamiseks kuvatakse ekraanile, kui ühendust ei toimu
        echo mysqli_connect_error().'<br/>';
        echo mysqli_connect_errno().'<br/>';
        return false; // tähendab funktsioon yhendus ei saanud oma töö tehtud
    } else {
        echo 'Ühendus andmebaasiga on olemas. <br/>';
        return $yhendus; // tagastab ühenduse, et seda saaks kasutada
    }
}

// Päringu saatmise funktsioon
function saadaParing($yhendus, $sql){
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus) { // kui tulemust ei ole
        echo 'Probleem päringuga '.$sql.'<br />';
        echo mysqli_error($yhendus).'<br/>';
        echo mysqli_errno($yhendus).'<br/>';
        return false;
    } else {
        echo 'Päring läks läbi<br />';
        return $tulemus;
    }
}

// andmetega päringu saatmise funktsioon
function annaAndmed($yhendus, $sql) {
    $tulemus = saadaParing($yhendus, $sql);
    $andmed = array(); // massiiv, kuhu paneme päringuga tulnud andmed
    if($tulemus != false) {
        while($rida = mysqli_fetch_assoc($tulemus)) {
            $andmed[] = $rida;
        }
    }
    if(count($andmed) == 0){
        return false;
    } else {
        // tagastame päringu andmetega täidetud massiivi
        return $andmed;
    }
}