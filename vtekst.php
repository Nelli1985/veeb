<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 25.01.2018
 * Time: 11:10
 */
require_once 'tekst.php';
class vtekst extends tekst
{
    // lisame värvi ka
    var $varv = '';
    /**
     * vtekst constructor.
     * @param string $varv
     */
    public function __construct($sone, $varv)
    {
        parent::__construct($sone);
        $this->maaraVarv($varv);
    }
    function maaraVarv($varv){
        $this->varv = $varv;
    }

    function prindiTekst()
    {
        if($this->varv == '') {
            parent::prindiTekst();
        } else {
            echo '<font color="'.$this->varv.'">'.$this->sone.'</font><br />';
        }
    }
}