<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-25
 * Time: 2:36 PM
 */

require_once('php/dbconnect.php');
require_once ('php/GenerateQuery.php');
$user = htmlspecialchars($_POST["username"]);
$pass = htmlspecialchars($_POST["password"]);

if(GenerateQuery::Login($user,$pass)=='true'){
    setcookie('username',
        $user,
        time()+(86400 * 30)
    );//time = 30days
    header('Location: profile.php');
    echo 'true';
}else{//Login failed
    $_COOKIE['username']='';
    echo $pass;
    //header('Location: index.php');
    echo "alert('Incorrect Login!');";
}
//Victor Test Code Below

//dbconnect::sql_query('SELECT * FROM test')

//$returntext = dbconnect::sql_query('Select * FROM test');
//echo count($returntext)."<br />";
//echo $returntext['address'];

//test case, works
//GenerateQuery::Create_New_User('Kat','123','ad1354gdfs2f4se3refaefvsfvgafbgsh');

//$array = dbconnect::sql_query('SELECT * FROM test');

//for ($i = 0; $i <= count($array); ++$i) {
//    for ($j = 0; $j <= count($array); ++$j) {
//        echo $array[$i][$j] . "<br/>";
//    }
//}
?>