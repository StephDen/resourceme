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
        if(encrypt::validatetoken(encrypt::decrypt_string($_COOKIE['resourcemetoken']))!=true){
            echo 'invalid token signature';
            //header('Location: login.php');
        }elseif(!isset($_COOKIE['resourcemetoken'])){
            echo 'nocookie';
        }else{
            $result = dbconnect::sql_query(
                'SELECT ID
                      FROM Personal_Info
                      WHERE Token ='.$_COOKIE['resourcemetoken'].';'
            );
            //checking if the user exists with specific token
            if(is_null($result[0][0])){
                echo 'blank result';
                //header('Location: login.php');
            }else{
                //getting server time
                $time = time();
                $encrypted_string = encrypt::encrypt_string($time);
                dbconnect::sql_insert(
                    'UPDATE Personal_Info
                        SET Last_Login='.$time.',Token ='.$encrypted_string.'
                        WHERE ID ='.$result[0][0].' ; '
                );
                //ADD IN SQL to update last login as well as generating a new cookie
                setcookie('resourcemetoken',
                    $encrypted_string,
                    time()+(86400 * 30)
                );//time = 30days
            }
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
            //header('Location: login.php');
        }else{
            $result = 'abc';
            //getting server time
            $time = time();
            $encrypted_string = encrypt::encrypt_string($time);
            dbconnect::sql_insert(
                'UPDATE Personal_Info
                        SET Last_Login='.$time.',Token ='.$encrypted_string.'
                        WHERE ID ='.$result.' ; '
            );
            //ADD IN SQL to update last login as well as generating a new cookie
            setcookie('resourcemetoken',
                $encrypted_string,
                time()+(86400 * 30)
            );//time = 30days
            $_COOKIE['resourcemetoken']=$encrypted_string;
        }
    }
}
?>
