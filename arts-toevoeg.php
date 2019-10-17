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
        echo "<th scope=\"col\">Artsid</th>";
        echo "<th scope=\"col\">Voornaam</th>";
        echo "<th scope=\"col\">Achternaam</th>";
        echo "<th scope=\"col\">adres</th>";
        echo "<th scope=\"col\">telefoonnummer</th>";
        echo "<th scope=\"col\">Specialiteit</th>";
        echo "<th scope=\"col\">Toevoegen</th>";
        echo "</tr>";
        echo "</thead>";
        if (isset($_POST['toev'])) {
            $artsid = $_POST['artsid'];
            $naam = $_POST['naam'];
            $achternaam = $_POST['achternaam'];
            $adres = $_POST['adres'];
            $telnummer = $_POST['telnummer'];
            $specialiteit = $_POST['specialiteit'];
            $query = $db->prepare("INSERT INTO artsen (artsid, naam, achternaam, adres, telefoonnummer, specialiteit) VALUES (:artsid, :naam, :achternaam, :adres, :telnummer, :specialiteit)") ;
            $query->bindparam("artsid", $artsid);
            $query->bindparam("naam", $naam);
            $query->bindparam("achternaam", $achternaam);
            $query->bindparam("adres", $adres);
            $query->bindparam("telnummer", $telnummer);
            $query->bindparam("specialiteit", $specialiteit);
            if ($query->execute()) {
                echo "De nieuwe gegevens zijn toegevoegd";

            } else {
                echo "Er is een fout opgetreden!";
            }
        }
        echo "<form method='post'>";
        echo "<tr>";
        echo "<td> <input type='text' name='artsid' value='" . '1000' . "'></td>";
        echo "<td> <input type='text' name='naam' value='" . 'Naam' . "'></td>";
        echo "<td> <input type='text' name='achternaam' value='" .'Achternaam' . "'></td>";
        echo "<td> <input type='text' name='adres' value='" . 'Adres' . "'></td>";
        echo "<td> <input type='text' name='telnummer' value='" . 'Telefoonnummer' . "'></td>";
        echo "<td> <input type='text' name='specialiteit' value='" . 'Specialiteit' . "'></td>";
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
