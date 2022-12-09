<?php

// try to read flag.php
highlight_file(__FILE__);
if(isset($_GET['secret'])){
    $secret = $_GET['secret'];
    if(!preg_match("/^.*flag|^.*cat|^.*tac|^.*GET|^.*POST|^.*REQUEST|^.*system|^.*exec|^.*shell_exec|^.*passthru|^.*php/i",$secret)){
        eval($secret);
    }
    else{
        echo "Hacker";
    }
}
?>
