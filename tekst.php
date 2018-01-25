<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 25.01.2018
 * Time: 10:32
 */
class tekst
{ // klassi algus
    // klassi omadused - väljad - fields
    // klassi muutuja
    var $sone = '';// teksti kirjeldavad sõnad
    /**
     * tekst constructor.
     * @param string $sone
     */
    public function __construct($sone)
    {
        $this->maaraTekst($sone);
    }
    // klassi tegevused
    // meetodid
    // teksti määramine
    // maaraTekst('Tere Maailm!');
    function maaraTekst($sone){
        $this->sone = $sone;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />';
    }
} // klassi lõpp