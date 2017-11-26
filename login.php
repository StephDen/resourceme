<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-25
 * Time: 2:36 PM
 */

require_once('php/dbconnect.php');

echo 'please log in';

//Victor Test Code Below

//dbconnect::sql_query('SELECT * FROM test')

//$returntext = dbconnect::sql_query('Select * FROM test');
//echo count($returntext)."<br />";
//echo $returntext['address'];

$array = array();

for ($i = 0; $i < 10; ++$i) {
    $array[$i] = $i;
}

for ($i = 0; $i < 10; ++$i) {
    echo $array[$i]."<br/>";
}
?>