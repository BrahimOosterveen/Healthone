<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <link rel="stylesheet" type="text/css" href="CSS/homeb.css">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="jumbotron text-center">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text">Zilverenkruis</h1>
        </div>
    </div>
</div>
    <style>
        nav {
            background-color: orange;
        }
    </style>
<nav class="navbar navbar-expand-sm navbar-light sticky-top">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img class="navbrand" src="foto/Zilveren-Kruis-logo.png" alt="Logo" >
    </a>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sub-apotheker.php">Apotheker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sub-dokter.php">Dokter</a>
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
        <div id="container">
            <div class="row">
        <div id="article" class="col-md-4">
            <img  id="geldzaken" src="foto/Dokter.jpg" alt="foto">
            <h2>Dokter</h2>
            <button type="button" class="btn btn-warning btn-block">Inloggen</button>
        </div>
        <div id="article" class="col-md-4">
            <img id="geldzaken" src="foto/Apotheker.jpg" alt="foto">
            <h2>Apotheker</h2>
            <button type="button" class="btn btn-warning btn-block">Inloggen</button>
        </div>
        <div id="article" class="col-md-4">
            <img  id="geldzaken" src="foto/Verzekeraar.jpg" alt="foto">
            <h2>Verzekeraar</h2>
            <button type="button" class="btn btn-warning btn-block">Inloggen</button>
        </div>
            </div>
        </div>
</div>


<footer id="sticky-footer" class="py-4 bg-secondary text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; Zilverenkruis</small>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
