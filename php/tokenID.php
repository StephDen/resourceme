<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-25
 * Time: 2:25 PM
 */

class tokenID
{
    /**
     *checks if the token is valid
     */
    public static function authenticate(){
        //checks if the signed string is valid, if not, redirect to login page
        if(!encrypt::validatetoken(encrypt::decrypt_string($_COOKIE['resourcemetoken']))){
            echo 'decrypted:'.encrypt::decrypt_string($_COOKIE['resourcemetoken']);
            echo 'tokenfail';
            //header('Location: login.php');
        }elseif(!isset($_COOKIE['resourcemetoken'])){
            echo 'nocookie';
        }//Add for checking if cookie matches the server

        else{
            //ADD IN SQL to update last login as well as generating a new cookie
            setcookie('resourcemetoken',
                encrypt::encrypt_string(encrypt::signtoken('SERVERtime')),
                time()+(86400 * 30)
            );//time = 30days
            return;
        }
    }

    /**
     *hardcodes an authentication cookie to show that token system works
     */
    public static function hardcodecookie(){
        //check if setting cookies are on
        if(!setcookie('resourcemetoken',
            encrypt::encrypt_string(encrypt::signtoken('SERVERtime')),
            time()+(86400 * 30)
        )){//time = 30days
            echo "<script type='text/javascript'>alert('please enable cookies');</script>";
        }else{
            setcookie('resourcemetoken',
                encrypt::encrypt_string(encrypt::signtoken('SERVERtime')),
                time()+(86400 * 30)
            );//time = 30days
            $_COOKIE['resourcemetoken'] = encrypt::encrypt_string(encrypt::signtoken('SERVERtime'));
            echo 'encrypted:'.$_COOKIE['resourcemetoken'];
        }
    }
}
?>
