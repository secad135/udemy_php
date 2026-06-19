<?php

$db_host = "your-db-host";
$db_name = "your-db-name";
$db_user = "your-db-user";
$db_pass = "your-db-password";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

echo "Connected successfully.";
