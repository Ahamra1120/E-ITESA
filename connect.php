<?php

$db_host = "localhost";
$db_user = "u336607621_man2jkt";
$db_pass = "u336607621_man2jkt";
$db_name = "u336607621_eoffice";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_error($conn)){
    echo "ERROR!!";
} else {
    echo "SUCCESS!!";
}