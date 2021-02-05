<?php
error_reporting(0);
$server_name="localhost";
$username="root";
$password="";
$database_name="stadium";

$conn= mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
  die("Connection Failed:" . " " .mysqli_connect_error());
}
?>