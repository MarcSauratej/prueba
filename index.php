<?php

//ini_set('display_errors','On');
session_start();
require 'config.php';
require 'src/router.php';

$controller=getRoute();
require APP.'/src/controllers/'.$controller.'.php';


