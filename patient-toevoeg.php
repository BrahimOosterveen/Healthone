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
</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="home.php">
        <img class="navbrand" src="foto/Zilveren-Kruis-logo.png" alt="Logo">
    </a>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav">
            <li class="nav-item">
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
</header>
<main>
    <article>
        <?php
            include 'database2.php';
            echo "<table id=\"table-1\" class=\"table table-striped\">";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope=\"col\">Patientnummer</th>";
            echo "<th scope=\"col\">Voornaam</th>";
            echo "<th scope=\"col\">Achternaam</th>";
            echo "<th scope=\"col\">Geboortedatum</th>";
            echo "<th scope=\"col\">telefoonnummer</th>";
            echo "<th scope=\"col\">Toevoegen</th>";
            echo "</tr>";
            echo "</thead>";
            if (isset($_POST['toev'])) {
                $patientnummer = $_POST['patientnummer'];
                $naam = $_POST['naam'];
                $achternaam = $_POST['achternaam'];
                $geboortedatum = $_POST['geboortedatum'];
                $telnummer = $_POST['telnummer'];
                $query = $db->prepare("INSERT INTO patient (patientnummer, naam, achternaam, geboortedatum, telefoonnummer) VALUES (:patientnummer, :naam, :achternaam, :geboortedatum, :telnummer)") ;
                $query->bindparam("patientnummer", $patientnummer);
                $query->bindparam("naam", $naam);
                $query->bindparam("achternaam", $achternaam);
                $query->bindparam("geboortedatum", $geboortedatum);
                $query->bindparam("telnummer", $telnummer);
                if ($query->execute()) {
                    echo "De nieuwe gegevens zijn toegevoegd";

                } else {
                    echo "Er is een fout opgetreden!";
                }
            }
            echo "<form method='post'>";
                echo "<tr>";
                echo "<td> <input type='text' name='patientnummer' value='" . 'Patientnummer' . "'></td>";
                echo "<td> <input type='text' name='naam' value='" . 'Naam' . "'></td>";
                echo "<td> <input type='text' name='achternaam' value='" .'Achternaam' . "'></td>";
                echo "<td> <input type='text' name='geboortedatum' value='" . 'jaar-md-da' . "'></td>";
                echo "<td> <input type='text' name='telnummer' value='" . 'Telefoonnummer' . "'></td>";
                echo "<td> <input type='submit' class='btn btn-primary' name='toev' value='Toevoegen'>" . "</td>";
                echo "</tr>";
            echo "</form>";


            echo "</table>";
            // Free result set

        ?>
        <a href="sub-verzekering.php">
            <button class="btn btn-primary" id="succesbtn-3" onclick="">Vorige pagina</button>
        </a>
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
