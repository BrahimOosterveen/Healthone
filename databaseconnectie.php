<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "healthone";
try{
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

}catch(Exception $conn){
    die("Connect failed: %s\n". $conn -> error);
}
?>