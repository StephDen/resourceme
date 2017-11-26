<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 2017-11-26
 * Time: 12:16 AM
 */

require_once('php/dbconnect.php');

class GenerateQuery
{
    Public Static Function Create_New_User($user,$pass,$token){
        $new_tsql = 'INSERT INTO Personal_Info (ID,Password,Token) VALUES('."'".$user."'".','."'".$pass."'".','."'".$token."'".');';
        dbconnect::sql_insert($new_tsql);
        $new_tsql = 'INSERT INTO Location(ID)VALUES ('."'".$user."'".');';
        dbconnect::sql_insert($new_tsql);
        $new_tsql = 'INSERT INTO STATUS(ID) VALUES ('."'".$user."'".');';
        dbconnect::sql_insert($new_tsql);
    }

    Public Static Function Login($user,$pass){
        $new_tsql = 'SELECT ID FROM Personal_Info WHERE ID ='."'".$user."'".' AND Password = '."'".$pass."'".';';
        $temp_array = dbconnect::sql_query($new_tsql);
        if(is_null($temp_array[0][0])){
            return 'false';
        }
        else{
            return 'true';
        }
    }



    Public Static Function UpdateNewLocation(){
        $address1a = htmlspecialchars($_POST["address1a"]);
        $address2a = htmlspecialchars($_POST["address2a"]);
        $citya = htmlspecialchars($_POST["citya"]);
        $countrya = htmlspecialchars($_POST["countrya"]);
        $postalCodea = htmlspecialchars($_POST["postalCodea"]);
        $arrivalDatea = htmlspecialchars($_POST["arrivalDatea"]);
        //(ID,DateArrived,Country,City,Address)
        $new_tsql = 'INSERT INTO Location VALUES('."'".$_COOKIE['username']."'".','."'".$countrya."'".','."'".$citya."'".','."'".$address1a."'".')'."'";
        dbconnect::sql_insert($new_tsql);

        $new_tsql = 'UPDATE Personal_Info SET Last_Updated'."'".time()."'".' WHERE ID = '."'".$_COOKIE['username']."'".';';
        dbconnect::sql_insert($new_tsql);
    }

    Public Static Function DisplayQuery(){
        $new_tsql = 'SELECT Personal_Info.ID,
            Date_of_Birth,
            Sex, Marital_Status,
            Religion, Citizenship,
            Place_of_Birth,
            Occupation,
            Education_Level,
            Ethnic_Origin,
            Last_Updated,
            Updated_By,
            Last_Login,
            First_Name,
            Last_Name,
            Active_Status,
            Country_of_Birth,
            Phone,
            Email,
            Password,
            Country_of_Origin,
            Address_of_Origin,
            City_of_Origin,
            Special_Needs,
            Depature_Date,
            Date_Arrived,
            Country,
            City,
            Street_Address
            FROM Personal_Info
            LEFT JOIN Location
            ON Personal_Info.ID =Location.ID
            WHERE Personal_Info.ID='."'".$_COOKIE['username']."'".';';
        return dbconnect::sql_query($new_tsql);
    }

    Public Static Function Search(){
        $sex = htmlspecialchars($_POST["sexSearch"]);
        $maritalStatus = htmlspecialchars($_POST["maritalStatusSearch"]);
        $education = htmlspecialchars($_POST["educationSearch"]);
        $countryOG = htmlspecialchars($_POST["countryOGSearch"]);
        $countryBirth = htmlspecialchars($_POST["countryBirthSearch"]);
        $specialNeeds = htmlspecialchars($_POST["specialNeedsSearch"]);

        //if ($specialNeeds == ""){
            $new_sql = '
        SELECT First_Name, Last_Name, Phone, Email, Sex, Marital_Status, Education_Level, Country_of_Birth, Country_of_Origin, Special_Needs
        FROM Personal_Info
        WHERE Sex = '."'".$sex."'".' OR '."'".$sex."'".' =Null AND
        Marital_Status = '."'".$maritalStatus."'".' OR '."'".$maritalStatus."'".' = Null AND
        Education_Level = '."'".$education."'".' OR '."'".$education."'".' = Null AND
        Country_of_Birth = '."'".$countryBirth."'".' OR'."'". $countryBirth."'".' = Null AND 
        Country_of_Origin = '."'".$countryOG."'".' OR'."'". $countryOG."'".' = Null AND
        Special_Needs = NULL;';
        } else{
            $temp = '*';
            $new_sql ='
        SELECT First_Name, Last_Name, Phone, Email, Sex, Marital_Status, Education_Level, Country_of_Birth, Country_of_Origin, Special_Needs
        FROM Personal_Info
        WHERE Sex = '."'".$sex."'".' OR '."'".$sex."'".' =Null AND
        Marital_Status = '."'".$maritalStatus."'".' OR '."'".$maritalStatus."'".' = Null AND
        Education_Level = '."'".$education."'".' OR '."'".$education."'".' = Null AND
        Country_of_Birth = '."'".$countryBirth."'".' OR'."'". $countryBirth."'".' = Null AND 
        Country_of_Origin = '."'".$countryOG."'".' OR'."'". $countryOG."'".' = Null AND
        Special_Needs LIKE '."'".$temp."'".';';

        //}

        return dbconnect::sql_query($new_sql);
    }

}
?>