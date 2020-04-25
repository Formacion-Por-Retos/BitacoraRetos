<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Formación Por Retos 📚</title>

    <link rel="apple-touch-icon" sizes="57x57" href="../Favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../Favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../Favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../Favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../Favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../Favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../Favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../Favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../Favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../Favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
    <link rel="manifest" href="../Favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../Favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="../Assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="../Assets/css/Team-Clean.css">

</head>

<style>
    table tr:nth-child(even) {
        background-color: ;
    }
    table tr:nth-child(odd) {
        background-color: #1FB2DE;
        color: white;
    }
    table th {
        border-collapse: collapse;
        background-color: #0F385A;
        color: white;
    }
    th, td {
        padding: 15px;
    }
    .responsive {
        width: 100%;
        height: auto;
    }
</style>
<body>


<nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #0F385A;" id="mainNav">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="../Assets/img/retos.png" width="120" height="45">
        </a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Views/home_select.php">INICIO</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                                            href="../Views/home_activities.php">MIS ACTIVIDADES</a></li>

                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Views/home_activitiesgeneral.php">ACTIVIDADES</a></li>


                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                                            href="../Models/logout.php">CERRAR SESION</a></li>


            </ul>
        </div>
    </div>
</nav>


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Inicio</h1>
                <?php
                include('../Models/user_Sesion.php');
                ?>
        </div>
            <br>
            <br>
            <div align="center">
                <img src="https://i.imgur.com/sCkmBU7.png" alt="Nature" class="responsive">
            </div>


        </main>
        </main>
    </div>
    </div>
    </div>
</section>
<script src="../Assets/js/jquery.min.js"></script>
<script src="../Assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../Assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="../Assets/js/agency.js"></script>

</body>
</html>
