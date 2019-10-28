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
            $query = $db->prepare("SELECT * FROM patient WHERE id=" . $_GET['id']) ;
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);


            foreach ($result as &$data) {
                ?>
            <table id="table-1" class="table table-striped">
                <thead>
                <tr>
                    <th scope=\"col\">id</th>
                    <th scope=\"col\">Voornaam</th>
                    <th scope=\"col\">Achternaam</th>
                    <th scope=\"col\">Geboortedatum</th>
                    <th scope=\"col\">telefoonnummer</th>
                    <th scope=\"col\">recept</th>
                </tr>
                </thead>
                <tr>
                    <td><?php echo $data['patientnummer']?></td>
                    <td><?php echo $data['naam']?></td>
                    <td><?php echo $data['achternaam']?></td>
                    <td><?php echo $data['geboortedatum']?></td>
                    <td><?php echo $data['telefoonnummer']?></td>
                    <td> <a href=recept.php?id=<?php echo $_GET['id'] ?>><button class="btn btn-info" id="succesbtn-3">Maken</button></a></td>

                <?php
            }
            ?>



</table>
            <a href="sub-dokter.php"><button class="btn btn-primary" id="succesbtn-3" onclick="">Vorige pagina</button></a>
            <br><br>
            <?php
            $id = $_GET['id'];
            $db = new PDO("mysql:host=localhost;dbname=healthone", "root","");
            $query1 = $db->prepare("SELECT * FROM recept where patientnummer = '$id'");
            $query1->execute();
            $result1 = $query1->fetchAll(PDO::FETCH_ASSOC);

            ?>

                    <table id="table-2" class="table table-striped">
                    <thead>
                    <tr>
                    <th scope="col">Recept</th>
                    <th scope="col">Medicijn nummer</th>
                    <th scope="col">lengte </th>
                    <th scope="col">herhaling</th>
                    <th scope="col">dosering</th>
                        <th scope="col">berichten</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                    </thead>
                        <?php
                        echo "<form method='post' action='verwijder.php'>";
//                        if(isset($_POST['verwijder'])){
//                            $query = $db->prepare("DELETE FROM recept WHERE id = 'id'");
//                            $query->bindparam("id", $_GET['id']);
//                            $query->execute();
//                        }
                        foreach ($result1 as &$data){
                        ?>
                        <tr>
                            <td> <?php echo $data['id'] ?> </td>
                            <td><?php echo $data['mid'] ?> </td>
                            <td><?php echo $data['lengte'] ?></td>
                             <td><?php if ($data['herhaling'] == 1){
                                     echo 'ja';
                                 } else echo 'nee';?> </td>
                        <td><?php echo $data['dosering'] ?> </td>
                            <td><?php echo $data['bericht'] ?> </td>
<!--                            <td> <input type='submit' class='btn btn-danger' name='verwijder' value='Verwijder'></td>-->
                            <td><a href="sub-dokter.php"><button class="btn btn-danger" id="succesbtn-3" onclick="">verwijderen</button></a> </td>
                        </tr>
                            <?php
                        }
                        echo "</form>";
                        ?>
                    </table>




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