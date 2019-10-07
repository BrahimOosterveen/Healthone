<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<?php
//$db = new PDO("mysql:host=localhost;dbname=healthone", "root", "");
//$query = $db->prepare("SELECT * FROM medicijnen WHERE id = " . $_GET['id']);
//$query->execute();
//$result = $query->fetchAll(PDO::FETCH_ASSOC);
//
//foreach ($result as &$data) {
//    echo "$data['naam']";
//}
//?>
<!--</body>-->
<!--</html>-->

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
<form class="form-horizontal" action="sub-verzekering.php">
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">medicijn-id:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="email" placeholder="Medicijn-id">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">medicijn naam:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="pwd" placeholder="Medicijn naam">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">vergoed:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="pwd" placeholder="vergoed" <?php {echo "checked=checked";}?>>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>
</body>
</html>