<?php
    session_start();
    include_once("db.php");

    if (isset($_POST['name_first']) && isset($_POST['name_last'])){
        if ($_POST['name_first'] != "" && $_POST['name_last'] != ""){
            $first = $_POST['name_first'];
            $last = $_POST['name_last'];
            $sql_store = "INSERT into names (id, first, last) VALUES (NULL, '$first', '$last')";
            $sql = mysqli_query($db, $sql_store) or die(mysqli_error());
            echo "You entered ))
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="POST">
        <input type="text" name="name_first" value="" placeholder="First Name">
        <input type="text" name="name_first" value="" placeholder="Last Name">
        <input type="submit" name="submit" value="" placeholder="Submit">
    </form>
</body>
</html>
