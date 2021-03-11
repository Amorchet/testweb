<?php
    define("host","loaclhost");
    define("username", "golf");
    define("pass" , "LrFgo83qfpSCskMI");
    define("db","test");

    $mysql = new mysqli(host,username,pass,db);
    if($mysql -> connect_errno){
        echo "failed to connect" . $mysql -> connect_errno;
    }else{
        echo "DB Connect";
    }
    
?>