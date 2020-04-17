<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Title</title>
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
<body>

<?php
include '../conexion_db.php';
?>


<nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #0F385A;" id="mainNav">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="../Assets/img/retos.png" width="120" height="45">
        </a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Views/home_select.php">INICIO</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                                            href="../Views/home_activities.php">MIS ACTIVIDADES</a></li>
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
                <main class="login-form">
                    <div class="cotainer">
                        <div class="row justify-content-center">
                            <div class="col-xs-7 col-sm-6 col-lg-8">
                                        <h1>Actividades</h1>
                                        <a href="../Views/actividades_View.php" class="btn btn-primary" >Registrar</a>
                                        <br>
                                        <br>


                                <div class="table-responsive">

                                    <?php
                                        session_start();
                                        $id = $_SESSION['id'];
                                        $con = connect();
                                        $sql = "select * from Actividades where usuario=$id ";
                                        $query = $con->query($sql);
                                        $data = array();
                                        if ($query) {
                                            while ($r = $query->fetch_object()) {
                                                $data[] = $r;
                                            }
                                        }
                                        ?>
                                        <?php if (count($data) > 0): ?>
                                            <table class="table table-bordered">
                                                <thead>
                                                <th>Nombre</th>
                                                <th>Fecha</th>
                                                <th>Descripción</th>
                                                <th>Participantes</th>
                                                <th>Evidencia</th>
                                                </thead>

                                                <?php foreach ($data as $d): ?>
                                                    <tr>
                                                        <td><?php echo $d->nombre; ?></td>
                                                        <td><?php echo $d->fecha; ?></td>
                                                        <td><?php echo $d->descripcion; ?></td>
                                                        <td>

                                                            <?php
                                                            $pcats = get_post_categorias($d->id);
                                                            if (count($pcats) > 0) {
                                                                foreach ($pcats as $pc) {
                                                                    $c = get_categoria($pc->Users_id);
                                                                    echo "<span class='badge badge-pill badge-primary'>";
                                                                    echo $c->name;
                                                                    echo "</span> ";
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $d->evidencia; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        <?php else: ?>
                                            <p class="alert alert-warning">No hay actividades registradas.</p>
                                        <?php endif; ?>


                            </div>
                            </div>
                        </div>
                    </div>
            </div>

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
