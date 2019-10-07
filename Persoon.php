<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/persoon.css">
    <title>Jan Schouten</title>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="home.php">
        <img class="navbrand" src="foto/Zilveren-Kruis-logo.png" alt="Logo" >
    </a>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sub-apotheker.php">Apotheker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sub-dokter.php">Doctor</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="sub-verzekering.php">Verzekeraar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="over.php">Contact</a>
            </li>

        </ul>
    </div>
</nav>

<div style="width: 100%;" class="row">
<div class="profiel">
    <img src="foto/Henk_Schouten.jfif" alt="">
</div>
    <div style="width: 20%; margin-left: 10px" class="table">
    <table class="table table-bordered">
        <tbody id="myTable">
        <tr>
            <th>Voornaam</th>
            <td>Jan</td>
        </tr>
        <tr>
            <th>Achternaam</th>
            <td>Schouten</td>
        </tr>
        <tr>
            <th>Leeftijd</th>
            <td>47</td>
        </tr>
        <tr>
            <th>Specialistatie</th>
            <td>Hart</td>
        </tr>
        </tbody>
    </table>
    </div>
</div>


</body>
</html>
