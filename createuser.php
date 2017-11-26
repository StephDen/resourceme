<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-26
 * Time: 10:07 AM
 */
require_once('php/GenerateQuery.php');
require_once('php/encrypt.php');
$user = htmlspecialchars($_POST["username"]);
$pass = htmlspecialchars($_POST["password"]);
$token = encrypt::encrypt_string(encrypt::signtoken('SERVERtime'));
GenerateQuery::Create_New_User($user,$pass,$token);
setcookie('username',
    $user,
    time()+(86400 * 30)
);//time = 30days
header('Location: profile.php');
?>