<?php

    require APP.'/lib/render.php';
    require APP.'/lib/conn.php';
    require APP.'/src/db/database.php';
    $inUsr= filter_input(INPUT_POST, 'username');
    $inPasswd= filter_input(INPUT_POST, 'passwd');
    $inEmail= filter_input(INPUT_POST, 'email');
    

if ($inUsr != null and $inPasswd != null and $inEmail != null) {

$gdb= getConnection($dsn, $dbuser, $dbpasswd);

$table= 'users';

insert($gdb,$table,$inUsr,$inPasswd,$inEmail);


    header("Location: ?url=home");

} else {

    header("Location: ?url=badlogin");
}

