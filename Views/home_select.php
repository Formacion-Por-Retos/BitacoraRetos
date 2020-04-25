<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Formación Por Retos 📚</title>


    <link rel="icon" type="image/png" sizes="32x32" href="../Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">





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
