<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100,200,300,400,500,600,700,800.900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header>
        <div class="container px-0">
            <nav class="navbar navbar-expand-md px-0 pt-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item pr-5">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <a href="" class="btn btn-pdf px-3">DESCARGÁ MI CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="home">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium animi nisi dolore earum,
                        doloremque doloribus deserunt, quam dolores voluptatum dolorem dicta voluptatem labore atque
                        fuga ullam exercitationem aut. Quisquam, velit.</p>
                </div>
                <div class="col-sm-6 col-12">
                    <form action="" method="POST">
                        <div class="mb-3 shadow">
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control"
                                placeholder="Nombre">
                        </div>
                        <div class="mb-3 shadow">
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control"
                                placeholder="Correo">
                        </div>
                        <div class="mb-3 shadow">
                            <textarea type="email" name="txtMensaje" id="txtMensaje" class="form-control"
                                placeholder="Comentarios..." rows="7"></textarea>
                        </div>
                    </form>
                    <div class="text-right">
                        <button type="submit" class="btn btn-enviar">ENVIAR</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="https://github.com/mbillalobos" target="_blank" title="Github"><i
                            class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/manuel-ignacio-billalobos-606a2b1b6/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-3" id="sponsor">
                    Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE" class="depc">DePC
                        Suite</a>
                </div>
                <div class="col-3">
                    <a href="mailto:">manuelignaciobillalobos@gmail.com</a>
                </div>
                <div class="col-3 text-right">
                    <a href="https://api.whatsapp.com/send?phone=542612054837" target="_blank" title="Whatsapp"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>