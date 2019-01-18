<?php   

$server="localhost";
$uname="root";
$pw="";
$dbname="newsdb";

$con= mysqli_connect($server,$uname,$pw,$dbname);

if(!$con)
{
    die("Connection error ".mysqli_connect_error());
}
?>