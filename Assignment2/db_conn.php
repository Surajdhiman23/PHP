<?php

$sname= "172.31.22.43";
$unmae= "Suraj200520350";
$password = "qXLe0WN6s4";

$db_name = "Suraj200520350";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}