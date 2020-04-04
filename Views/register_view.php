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
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">INICIO</a></li>
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
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Nombre completo:</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="name" class="form-control" name="name" required autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Codigo:</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="codigo" class="form-control" name="codigo" required autofocus>
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