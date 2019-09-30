<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/sub-dokter.css">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
<!--    <script src="JS/Dokter.js"></script>-->

    <title>Document</title>
</head>
<body>

<div class="container">
    <header>
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text">Zilverenkruis</h1>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img class="navbrand" src="foto/Zilveren-Kruis-logo.png" alt="Logo" >
            </a>
            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="sub-apotheker.php">Apotheker</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dokter</a>
                        <div class="dropdown-menu">
                            <a href="medicijnen.php" class="dropdown-item">Medicijnen</a>
                            <a href="#" class="dropdown-item">Drafts</a>
                            <a href="#" class="dropdown-item">Sent Items</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Verzekeraar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="over.php">Contact</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <main>
        <article>
            <?php
            include 'databaseconnectie.php';
            $sql = "SELECT Patientnummer, Naam, Achternaam, Geboortedatum, telefoonnummer, medicijnen, medicijnenvullen FROM dokter";
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
                    echo "<th scope=\"col\">Geboortedatum</th>";
                    echo "<th scope=\"col\">telefoon nummer</th>";
                    echo "<th scope=\"col\">medicijnen</th>";
                    echo "<th scope=\"col\">medicijnen invullen</th>";
                    echo "<th scope=\"col\">Status</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody id=\"myTable\">";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['Patientnummer'] . "</td>";
                        echo "<td>" . $row['Naam'] . "</td>";
                        echo "<td>" . $row['Achternaam'] . "</td>";
                        echo "<td>" . $row['Geboortedatum'] . "</td>";
                        echo "<td>" . $row['telefoonnummer'] . "</td>";
                        echo "<td>" . $row['medicijnenvullen'] . "</td>";
                        echo "<td>" . "<input type=\"text\" id=\"Yeet\" placeholder=\"Vul medicijn in\"</td>";
                        echo "<td>" . "<!--Add functionality to Succes & Danger buttons with PHP/JS-->
                        <button class=\"btn btn-success\" id=\"succesbtn-3\" onclick=\"\">✔</button>
                        <button class=\"btn btn-danger\" id=\"removebtn-3\">YEET</button>" . "</td>"; //✖
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



session_start();
include_once("db.php");

if (isset($_POST['name_first']) && isset($_POST['name_last'])){
    if ($_POST['name_first'] != "" && $_POST['name_last'] != ""){
        $first = $_POST['name_first'];
        $last = $_POST['name_last'];
        $sql_store = "INSERT into names (id, first, last) VALUES (NULL, '$first', '$last')";
        $sql = mysqli_query($db, $sql_store) or die(mysqli_error());

        }else {
        echo "You entered nothing";
    }
    }
            
            
            


            ?>
            <p id="demo"></p>

            <form action="sub-dokter.php" method="POST">
                <input type="text" name="name_first" value="" placeholder="First Name">
                <input type="text" name="name_last" value="" placeholder="Last Name">
                <input type="submit" name="submit" value="" placeholder="Submit">
            </form>
        </article>
    </main>
</div>


<footer id="sticky-footer" class="py-4 bg-secondary text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; Zilverenkruis</small>
    </div>
</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>

