<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
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
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Views/home_activities.php">MIS ACTIVIDADES</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Models/logout.php">CERRAR SESION</a></li>

            </ul>
        </div>
    </div>
</nav>


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                include('../Models/user_Sesion.php');
                ?>

        </div>
        </main>
        </main>
    </div>
    </div>
    </div>
</section>


</body>
</html>
