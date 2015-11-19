<?php
include '../inc/global.php';
//require_once '../inc'

class Person {
    static function Get(){
        $conn = GetConnection();
        $results = $conn->query("SELECT * FROM 2015Fall_Persons");
        $row = $results->fetch_assoc();
        //var_dump($row);//=> its like "print(r);"
        //echo '<pre>'
        //print_r
        my_print($row);
    }
}

function FetchAll($sql){
    $ret = array();
    $conn = GetConnection();
    $results = $conn->query($sql);
    
    $error = $conn->error;
    if($error){
        echo $error;
    }else{
        while ($rs = $results->fetch_assoc()) {
            $ret[] = $rs;
        }
    }
    $conn->close();
    
    return $ret;
}

Person::GET();