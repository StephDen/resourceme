<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-25
 * Time: 2:36 PM
 */

require_once('php/dbconnect.php');

echo 'please log in';

//dbconnect::sql_query('SELECT * FROM test')

$returntext = dbconnect::sql_query('Select * FROM test');
echo $returntext['address'];
?>