<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 1/19/2018
 * Time: 1:06 PM
 */

// nõuame andmebaasitöötlusfunktsioonid kasutusele
require_once 'db_fnk.php';

// tekitame ühendus andmebaasiga
$dbYhendus = yhendus();

// koostame sqli lause ja saadame andmebaasi
$sql = 'SHOW TABLES';
$tulemus = saadaParing($dbYhendus, $sql);
// uurime tulemuse sisu tekst kujul
echo '<pre>';
print_r($tulemus);
echo '<pre>';