<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-25
 * Time: 2:36 PM
 */

require_once('php/dbconnect.php');

echo 'please log in';

$returntext = dbconnect::sql_query('Select * FROM test');
echo $returntext.[Address];
?>