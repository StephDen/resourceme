<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-25
 * Time: 2:25 PM
 */

class tokenID
{
    public static function authenticate(){
        //checks if the signed string is valid, if not, redirect to login page
        if(encrypt::signed_string_is_valid($_COOKIE['resourcemetoken']) != true
            or !isset($_COOKIE['resourcemetoken'])){
            header('Location: login.php');
        }else{
            return;
        }
    }

    public static function hardcodecookie(){
        //hardcodes an authentication cookie to show that token system works

    }
}
?>