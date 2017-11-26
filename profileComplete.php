<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 2017-11-25
 * Time: 10:02 PM
 */
//REQUIRED FOR ALL FILES///////////
require_once('php/dbconnect.php');
require_once('php/encrypt.php');
require_once ('php/tokenID.php');
tokenID::hardcodecookie();
tokenID::authenticate();
///////////////////////////////////

echo "something";


//convert all text boxes to variables
$givenName = htmlspecialchars($_POST["givenName_register"]);
$lastName = htmlspecialchars($_POST["lastName_register"]);
$sex = htmlspecialchars($_POST["sex_register"]);
$birthday = htmlspecialchars($_POST["birthday_register"]);
$nationality = htmlspecialchars($_POST["nationality_register"]);
$photo = htmlspecialchars($_POST["photo_register"]);
$tel = htmlspecialchars($_POST["tel_register"]);
$email = htmlspecialchars($_POST["email_register"]);
$address1 = htmlspecialchars($_POST["address1_register"]);
$address2 = htmlspecialchars($_POST["address2_register"]);
$nationality2 = htmlspecialchars($_POST["nationality2_register"]);
$postalCode = htmlspecialchars($_POST["postalCode_register"]);
$martialStatus = htmlspecialchars($_POST["martialStatus_register"]);
$religion = htmlspecialchars($_POST["religion_register"]);
$ethnicity = htmlspecialchars($_POST["ethnicity_register"]);
$education = htmlspecialchars($_POST["education_register"]);
$occupation = htmlspecialchars($_POST["occupation_register"]);


//$tsql = ;
?>