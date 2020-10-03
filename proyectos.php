<?php $pg = "proyectos"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
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

<body id="proyectos">
    <header>
        <div class="container px-0">
            <?php include_once("menu.php"); ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row pt-5 pb-4">
                <div class="col-12 px-0">
                    <h1>Mis proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-7 px-0 pb-4">
                    <p>Estos son algunos de los trabajos que hice durante el cursado:</p>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="container pb-5">
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="bg-white shadow">
                        <img src="images/abmclientes.png" alt="ABM Ventas" class="img-fluid p-3">
                        <div class="row p-3">
                            <div class="col-12 degradado">
                                <h3>ABM CLIENTES</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json. <br><br><br></p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-online" target="_blank">VER ONLINE</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="" class="codigo-fuente">CÓDIGO FUENTE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="bg-white shadow">
                        <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid p-3">
                        <div class="row p-3">
                            <div class="col-12 degradado">
                                <h3>SISTEMA DE GESTIÓN DE VENTAS</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, JS, Ajax, jQuery, y MySQL de base de dastos. <br><br></p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-online" target="_blank">VER ONLINE</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="" class="codigo-fuente">CÓDIGO FUENTE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="bg-white shadow">
                        <img src="images/sistema-admin.png" alt="ABM Ventas" class="img-fluid p-3">
                        <div class="row p-3">
                            <div class="col-12 degradado">
                                <h3>PROYECTO INTEGRADOR</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, con panel administrador, gestor de usuarios, módulo de
                                    permisos y funcionalidades a fines.</p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-online" target="_blank">VER ONLINE</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="" class="codigo-fuente">CÓDIGO FUENTE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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