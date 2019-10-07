<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "healthone";
$id = $_GET['id'];
try{
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    $sql = "UPDATE Apotheker SET status = 0 WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
}catch(Exception $conn){
    die("Connect failed: %s\n". $conn -> error);
}


header("Location: detail.php?id=" . $_GET['id']); /* Redirect browser */
echo "";
/* Make sure that code below does not get executed when we redirect. */
exit;


?>