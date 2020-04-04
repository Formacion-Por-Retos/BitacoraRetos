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
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../index.php">INICIO</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Models/logout.php">CERRAR SESION</a></li>

            </ul>
        </div>
    </div>
</nav>


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <main class="login-form">
                    <?php
                    include('Models/user_Sesion.php');
                    ?>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Registro de Actividades:</div>
                                    <div class="card-body">

                                        <form action="../Models/registro_Actividad.php" method="POST">

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nombre de la Actividad:</label>
                                                <input type="nombreactividad" class="form-control" id="nombre" name="nombre"
                                                       placeholder="Actividad" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Fecha de Registro:</label>
                                                <input type="date" id="datepicker" name="datepicker" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Seleccione el Proyecto:</label>
                                                <select class="form-control" id="proyecto" name="proyecto" required>
                                                <option value='1'>GoPoli</option>
                                                <option value='2'>Apps mamás</option>
                                                <option value='3'>Divulgación Retos</option>
                                                <option value='4'>Effie</option>
                                                <option value='5'>Hackathon Fidi</option>
                                                <option value='6'>Laboratorios remotos</option>
                                                <option value='7'>Podcast</option>
                                                <option value='8'>Salones</option>
                                                <option value='9'>Telepizza</option>
                                                <option value='10'>Tienda Poli</option>
                                                <option value='11'>Ángeles azules</option>
                                                </select>

                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Descripción de la Actividad</label>
                                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                                                </div>
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-danger">Registrar Actividad</button>
                                                </div>

                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </main>
            </main>
        </div>
    </div>
    </div>
</section>


<script>
    $(function () {
        $("#datepicker").datepicker({dateFormat: 'yyyy-mm-dd'});
    });
</script>
</body>
</html>

