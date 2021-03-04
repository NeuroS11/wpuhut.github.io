<?php

    $data = file_get_contents('pizza.json');
    $menu = json_decode($data, true);

    $menu = $menu["menu"];

?>

<!doctype html>
<html lang="en" id="home">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Wpu Hut</title>
</head>
<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Shop logo" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#">All Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">pizza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">pasta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">nasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">minuman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ending navbar -->


    <!-- content -->

    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h1>All Menu</h1>
            </div>
        </div>

        <div class="row" id="all-menu">

        </div>
    </div>

    <!-- ending content -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>