<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','test_db');

// $link = mysqli_connect(DB_SERVER,DB_SERVER,DB_PASSWORD,DB_NAME);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link == false){
    die("Error : could not connect");
    mysqli_connect_error();
}

?> 
