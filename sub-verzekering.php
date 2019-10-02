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
    <link rel="stylesheet" type="text/css" href="CSS/sub-verzekering.css">
    <title>Verzekering</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
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
<div class="container">
    <h2>Patienten</h2>
    <input class="form-control" id="patientInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Geboorte datum</th>
            <th>E-mail</th>
        </tr>
        </thead>
        <tbody id="patientTable">
        <tr>
            <td>302837783</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>26-04-1999</td>
            <td>**</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thorton</td>
            <td>29-01-2001</td>
            <td>**</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Larry</td>
            <td>Brid</td>
            <td>11-06-1973</td>
            <td>**</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="container">
    <h2>Medicijnen</h2>
    <input class="form-control" id="medicijnenInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Medicijn</th>
            <th>Vergoed</th>
        </tr>
        </thead>
        <tbody id="medicijnenTable">
        <tr>
            <td>1</td>
            <td>Hooikoorts tabletten</td>
            <td><button type="button" class="btn btn-danger">Niet vergoed</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Medicijn Wiet</td>
            <td><button type="button" class="btn btn-success">Vergoed</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Antibiotica</td>
            <td><button type="button" class="btn btn-danger">Niet vergoed</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Anticonceptiepil</td>
            <td><button type="button" class="btn btn-danger">Niet vergoed</button></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="container">
    <h2>Artsen</h2>
    <input class="form-control" id="artsenInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Informatie</th>
        </tr>
        </thead>
        <tbody id="artsenTable">
        <tr>
            <td>Jan</td>
            <td>Schouten</td>
            <td><a href="Persoon.php">Meer informatie</a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function(){
        $("#patientInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#patientTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#medicijnenInput").on("keyup", function() {
            var value = $(this).val().toLowerCase().trim();
            $("#medicijnenTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#artsenInput").on("keyup", function() {
            var value = $(this).val().toLowerCase().trim();
            $("#artsenTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<?php

?>
</body>
</html>
