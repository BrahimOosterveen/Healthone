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
    <?php
            session_start();
            include 'databaseconnectie.php';
            $sql = "SELECT patientnummer, naam, achternaam, geboortedatum, telefoonnummer, recept FROM patient";
            $result = mysqli_query($conn, $sql);

            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for ID..\">";
                    echo "<table class=\"table table-striped\">";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th scope=\"col\">Patiënt nummer</th>";
                    echo "<th scope=\"col\">Voornaam</th>";
                    echo "<th scope=\"col\">Achternaam</th>";
                    echo "<th scope=\"col\">Meer info</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody id=\"myTable\">";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['patientnummer'] . "</td>";
                        echo "<td>" . $row['naam'] . "</td>";
                        echo "<td>" . $row['achternaam'] . "</td>";
                        echo "<td>
                        <a href=verzeker-gegevens.php?id=" . $row['patientnummer']. "><button class=\"btn btn-info\" id=\"succesbtn-3\">Info</button></a>" . "</td>";
                        echo "</form>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    // Free result set
                    mysqli_free_result($result);
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            ?>
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
