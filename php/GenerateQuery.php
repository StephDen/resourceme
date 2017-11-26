<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 2017-11-26
 * Time: 12:16 AM
 */

class GenerateQuery
{
    Public Static Function Create_New_User($user,$pass,$token){
        $tsql = 'INSERT INTO Personal_Info (ID,Password,Token) VALUES('.$user.','.$pass.','.$token.');';
        dbconnect::sql_insert($tsql);
        $tsql = 'INSERT INTO Location(ID)VALUES ('.$user.');';
        dbconnect::sql_insert($tsql);
        $tsql = 'INSERT INTO STATUS(ID) VALUES ('.$user.');';
        dbconnect::sql_insert($tsql);
    }


}