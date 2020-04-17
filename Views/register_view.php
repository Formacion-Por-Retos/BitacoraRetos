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
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Registro de Usuario</div>
                                    <div class="card-body">
                                        <form action="../Models/user_register.php" method="POST">


                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right"" >Nombre completo:</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="name" class="form-control" name="name" required autofocus style="text-transform:uppercase">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Codigo:</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="codigo" class="form-control" name="codigo" required autofocus>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Rol:</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="rol" name="rol" required>
                                                        <option value='1'>Estudiante</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Carrera:</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="carrera" name="carrera" required>
                                                    <option value='1'>Diseño Gráfico</option>
                                                    <option value='2'>Diseño de Modas</option>
                                                    <option value='3'>Diseño Industrial</option>
                                                    <option value='4'>Ingeniería Sistemas</option>
                                                    <option value='5'>Ingeniería Industrial</option>
                                                    <option value='6'>Ingeniería Telecomunicaciones</option>
                                                    <option value='7'>Matemáticas</option>
                                                    <option value='8'>Mercadeo y Publicidad</option>
                                                    <option value='9'>Medios Audiovisuales</option>
                                                    <option value='10'>Piscología</option>
                                                    <option value='11'>Derecho</option>
                                                    <option value='12'>Artes de la Escena</option>
                                                    <option value='13'>Comunicación social</option>
                                                    <option value='14'>Negocios internacionales</option>
                                                    <option value='15'>Administración de empresas</option>
                                                    <option value='16'>Contaduría pública </option>
                                                    <option value='17'>Economía</option>
                                                    <option value='18'>Administración hotelera y gastronómica</option>
                                                </select>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Correo:</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="email" class="form-control" name="email" required autofocus>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña:</label>
                                                <div class="col-md-6">
                                                    <input type="password" id="password" class="form-control" name="password" required>
                                                </div>
                                            </div>



                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-success">Registrarse</button>
                                            </div>
                                    </div>
                                    </form>
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
