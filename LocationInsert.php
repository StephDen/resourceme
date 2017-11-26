<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 2017-11-26
 * Time: 7:55 AM
 */

require_once('php/dbconnect.php');
require_once('php/GenerateQuery.php');
GenerateQuery::UpdateNewLocation();
header('Location: profile.php');
?>
