<?php
ini_set('display_errors', 1);
date_default_timezone_set("America/New_York");

function GetConnection(){
    $sql_password = "";
    return new mysqli('localhost','allendee1',$sql_password,'c9');
}



die('hello');
//$conn = GetConnection();

//print_r(GetConnection());
//print_r($conn);