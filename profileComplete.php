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
$givenName = htmlspecialchars($_POST["givenName"]);
$lastName = htmlspecialchars($_POST["lastName"]);
$sex = htmlspecialchars($_POST["sex"]);
$birthday = htmlspecialchars($_POST["birthday"]);
$Bcity = htmlspecialchars($_POST["Bcity"]);
$Bcountry = htmlspecialchars($_POST["Bcountry"]);
$nationality = htmlspecialchars($_POST["nationality"]);
$photo = htmlspecialchars($_POST["photo"]);
$tel = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);
$address1 = htmlspecialchars($_POST["address1"]);
$address2 = htmlspecialchars($_POST["address2"]);
$city = htmlspecialchars($_POST["city"]);
$country = htmlspecialchars($_POST["country"]);
$postalCode = htmlspecialchars($_POST["postalCode"]);
$arrivalDate = htmlspecialchars($_POST["arrivalDate"]);
$maritalStatus = htmlspecialchars($_POST["maritalStatus"]);
$religion = htmlspecialchars($_POST["religion"]);
$ethnicity = htmlspecialchars($_POST["ethnicity"]);
$education = htmlspecialchars($_POST["education"]);
$occupation = htmlspecialchars($_POST["occupation"]);
$address1Origin = htmlspecialchars($_POST["address1Origin"]);
$address2Origin = htmlspecialchars($_POST["address2Origin"]);
$cityOrigin = htmlspecialchars($_POST["cityOrigin"]);
$countryOrigin = htmlspecialchars($_POST["countryOrigin"]);
$postalCodeOrigin = htmlspecialchars($_POST["postalCodeOrigin"]);
$departureDate = htmlspecialchars($_POST["departureDate"]);



//$tsql = ;
?>