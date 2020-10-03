<?php $pg = "inicio"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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

<body id="inicio">
    <header>
        <div class="container px-0">
            <?php include_once("menu.php"); ?>
        </div>
    </header>
    <main class="home">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2 class="px-3 py-2">Hola mi nombre es <span>Ignacio</span>, soy desarrollador full stack.  |  <i class="fas fa-search"></i></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.php " class="btn btn-trabajo">MIRÁ MI TRABAJO</a>
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
                    <a href="https://www.linkedin.com/in/manuel-ignacio-billalobos-606a2b1b6/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
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