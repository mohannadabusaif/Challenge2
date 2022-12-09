<?php


// try to read flag.php

highlight_file(__FILE__);

if(isset($_GET['secret'])){
    $secret = $_GET['secret'];
    if(!preg_match("/^.*[a-zA-Z0-9-_*&|$!.<>{},`\'\"]/i",$secret)){
        eval($secret);
    }
    else{
        echo "Hacker";
}
}
?>
