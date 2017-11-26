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
$LastUpdated = time();
$special_needs = htmlspecialchars($_POST["special_needs"]);
$token = $_COOKIE['resourcemetoken'];
$new_tsql = '
UPDATE Personal_Info
 SET Date_of_Birth = '."'".$birthday."'".',
    Sex = '."'".$sex."'".',
    Marital_Status = '."'".$maritalStatus."'".',
    Religion = '."'".$religion."'".',
    Citizenship = '."'".$nationality."'".',
    Photograph = '."'".$photo."'".',
    Place_of_Birth = '."'".$Bcity."'".',
    Occupation = '."'".$occupation."'".',
    Education_Level = '."'".$education."'".',
    Ethnic_Origin = '."'".$ethnicity."'".',
    Last_Updated = '."'".LastUpdated."'".',
    Updated_By = '."'".$_COOKIE['Username']."'".',
    Last_Login = '."'".$LastUpdated."'".',
    First_Name = '."'".givenName."'".',
    Last_Name = '."'".$lastName."'".',
    Active_Status = 1,
    Country_of_Birth = '."'".$Bcountry."'".',
    Phone = '."'".$tel."'".',
    Email = '."'".$email."'".',
    Token = '."'".$token."'".',
    Country_of_Origin = '."'".$countryOrigin."'".',
    City_of_Origin = '."'".$cityOrigin."'".',
    Address_of_Origin = '."'".$address1Origin."'".',
    Special_Needs = '."'".$special_needs."'".',
    Depature_Date = '."'".$departureDate."'".' WHERE ID = '."'".$_COOKIE['Username']."'".';';

    dbconnect::sql_insert($new_tsql);

//address 2?

    $new_tsql = '
      UPDATE (SELECT TOP 1 *
      FROM Location
      ORDER BY Date_Arrived DESC)
      SET Country = '."'".$country."'".',
      City = '."'".$city."'".',
      Street_Address = '."'".$address1."'".';';
    dbconnect::sql_insert($new_tsql);
header('Location: profile.php');
?>