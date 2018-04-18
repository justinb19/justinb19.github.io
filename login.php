<?php
session_start();

if(isset($_SESSION['name'])){
    echo "Test";
}

//Passwortüberprüfung für Login
$login = $_POST["login"];
$pass = sha1($_POST["pass"]);
$logindata = array();
$logindata["admin"]["password"] = "f865b53623b121fd34ee5426c792e5c33af8c227";
$logindata["admin"]["username"] = "admin";
$logindata["admin"]["rank"] = "admin";
$logindata["user"]["password"] = "95c946bf622ef93b0a211cd0fd028dfdfcf7e39e";
$logindata["user"]["username"] = "user";
$logindata["user"]["rank"] = "user";

if(($logindata["$login"]["username"] == $login) && ($logindata["$login"]["password"] == $pass)){
    if($logindata["$login"]["rank"]== "admin"){
        header("Location: Seite6.html");
    }else{
        header("Location: Seite6-1.html");
    }
    
}else{
    header("Location: Seite5-1.html");
}
    






?>
