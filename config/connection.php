<?php
$host="127.0.0.1";
$username="root";
$password="";
$database="expense-tracker";

$connection=mysqli_connect($host,$username, $password, $database);

if (!$connection){
    echo "Connectivity to DB Failed!";
}