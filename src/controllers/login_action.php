<?php

require APP.'/lib/render.php';
require APP.'/lib/conn.php';
require APP.'/src/db/database.php';

$inEmail= filter_input(INPUT_POST, 'email');
$inPasswd= filter_input(INPUT_POST, 'passwd');
$remindCheck= filter_input(INPUT_POST, 'remind');


if ($inEmail != null and $inPasswd != null) {

$gdb= getConnection($dsn, $dbuser, $dbpasswd);

$auth= auth($gdb,$inEmail,$inPasswd);

$login = date('m-d-Y h:i:s a', time());
$lastlogin = $login;

if ($auth==true){
    if ($remindCheck==true){
        setcookie('email',$inEmail,0,'/','localhost');
        setcookie('passwd',$inPasswd,0,'/','localhost');
        setcookie('lastlogin',$lastlogin,0,'/','localhost');
         
        
        $lastlogin = filter_input(INPUT_POST, 'lastlogin');
        
        //setcookie();
        }

    header("Location: ?url=dashboard");
}else {
    header("Location: ?url=badlogin");
}

} else {

    header("Location: ?url=badlogin");
}