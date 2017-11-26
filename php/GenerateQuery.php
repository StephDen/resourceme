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
        $new_tsql = 'SELECT ID FROM Personal_Info WHERE ID ='."'".$user."'".' AND '."'".$pass."'".';';
        $temp_array = dbconnect::sql_query($new_tsql);
        echo $temp_array[0][0];
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



    }

}
?>