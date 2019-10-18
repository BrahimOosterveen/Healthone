<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/sub-apotheker.css">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">

    <title>Document</title>
</head>
<body>

<div class="container">
    <header>
    <div class="jumbotron text-center">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text">Zilverenkruis</h1>
                <h3 class="text" style="color: grey;">Apotheker</h3>
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
                <li class="nav-item dropdown active">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Apotheker</a>
                    <div class="dropdown-menu">
                        <a href="sub-apotheker.php" class="dropdown-item">Patienten lijst</a>
                        <a href="sub-apotheker-opgehaaldrecepten.php" class="dropdown-item">Opgehaalde recepten</a>
                        <a href="sub-apotheker-afwachtenderecepten.php" class="dropdown-item">Afwachtende recepten</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Verzekeraar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="over.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reset-password.php">Reset Password</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>
    <main>
        <article>
            <?php
            include 'databaseconnectie.php';
            $sql = "SELECT id, Naam, Achternaam, Geboortedatum FROM Apotheker";
            $result = mysqli_query($conn, $sql);

            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for ID..\">";
                    echo "<h4 class='shadow' style='padding: 10px;'>Patienten</h4>";
                    echo "<table id=\"table-1\" class=\"table table-striped\">";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th scope=\"col\">id</th>";
                    echo "<th scope=\"col\">Voornaam</th>";
                    echo "<th scope=\"col\">Achternaam</th>";
                    echo "<th scope=\"col\">Geboortedatum</th>";
                    echo "<th scope=\"col\">Meer info</th>";
                    echo "</tr>";
                    echo "</thead>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['Naam'] . "</td>";
                        echo "<td>" . $row['Achternaam'] . "</td>";
                        echo "<td>" . $row['Geboortedatum'] . "</td>";
                        echo "<td>
                        <a href=detail.php?id=" . $row['id']. "><button class=\"btn btn-primary\" id=\"succesbtn-3\">Info</button></a>" . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Free result set
                    mysqli_free_result($result);
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            ?>
            <p id="demo"></p>
        </article>
    </main>
</div>


<footer id="sticky-footer" class="py-4 bg-secondary text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; Zilverenkruis</small>
    </div>
</footer>
<script src="JS/filteredSearch.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
