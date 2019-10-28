<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <link rel="stylesheet" type="text/css" href="CSS/sub-dokter.css">

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
            <a class="navbar-brand" href="home.php">
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
                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dokter</a>
                        <div class="dropdown-menu">
                            <a href="sub-dokter.php" class="dropdown-item">Dokter</a>
                            <a href="medicijnen.php" class="dropdown-item">Medicijnen</a>

                        </div>
                    </li>
                    <li class="nav-item">
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
            $db = new PDO("mysql:host=localhost;dbname=healthone", "root","");
            $query3 = $db->prepare("SELECT * FROM medicijn");
            $query3->execute();
            $result3 = $query3->fetchAll(PDO::FETCH_ASSOC);
            ?>


                    <form method='post' action=''>
                    <p>Medicijn</p>
                        <div class="form-group">
                            <select class="form-control" name="medicijn_id">";
                                <?php
                                    foreach ($result3 as &$data3) {
                                echo "<option value='" . $data3['mid'] . "'>" . $data3['naam'] . "</option>";echo "<br>";
                                }?>
                            </select>
                        </div>
                                <p>Dosering</p>

                        <div class="form-group"><input name='dosering' value='dosering' class="form-control" id="dosering"></div>

                        <P>Lengte</P>

                        <div class="form-group"><input name="lengte" class="form-control" id="lengte"></div>

                        <P>Herhaling</P>

                        <div class="form-group"><select name="herhaling" class="form-control form-control-warning" id="herhaling">
                        <option value='1'>Ja</option>
                        <option value='0'>Nee</option>
                        </select></div>
                        <p>Berichten</p>
                        <textarea name="bericht" id="bericht"></textarea><br>
<!--                        <label>commentaar</label><br>-->
<!--                        <textarea name="commentaar" value="commentaar"></textarea><br>-->

                       <a class="btn btn-warning" href="gegevens.php?id=<?php echo $_GET['id'] ?>">Vorige pagina</a>
                       <input type='submit' name='maken' value='maken' class="btn btn-info">
                    </form>


<?php

            if (isset($_POST['maken'])) {
                $patientnummer = $_GET['id'];
                $medicijn_id = filter_input(INPUT_POST,'medicijn_id', FILTER_SANITIZE_NUMBER_INT);
                $lengte = filter_input(INPUT_POST,'lengte', FILTER_SANITIZE_STRING);
                $herhaling = filter_input(INPUT_POST,'herhaling', FILTER_SANITIZE_NUMBER_INT);
                $dosering = filter_input(INPUT_POST,'dosering', FILTER_SANITIZE_STRING);
                $bericht = filter_input(INPUT_POST,'bericht', FILTER_SANITIZE_STRING);

                $db = new PDO("mysql:host=localhost;dbname=healthone", "root","");
                $query = $db->prepare("INSERT INTO recept(patientnummer, mid, lengte, herhaling, dosering, bericht) VALUES ('$patientnummer','$medicijn_id','$lengte','$herhaling','$dosering', '$bericht')");

                if ($query->execute()) {
                    echo "hij doet het";
                } else {
                    echo "hij doet het niet";
                }



            }

?>


            <p id="demo"></p>
        </article>
    </main>


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