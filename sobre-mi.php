<?php $pg = "sobre-mi"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
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

<body id="sobre-mi">
    <header>
        <div class="container px-0">
            <?php include_once("menu.php"); ?>
        </div>
    </header>
    <main id="iniciado">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-6 col-12 px-0">
                    <h1>Sobre Mí</h1>
                    <p>Aprendiz de programación y apasionado por la tecnología. Tengo formación técnica en electronica y
                        automatización.</p>
                    <div class="row">
                        <div class="col-sm-3 col-4 pl-2">
                            <a href="https://github.com/mbillalobos" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/manuel-ignacio-billalobos-606a2b1b6/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                        <div class="col-sm-5 col-4 text-right">
                            <a href="" class="btn btn-curriculum" >DESCARGÁ MI CV</a>       
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 imagen center">
                    <img src="images/avatar.jpg" alt="">
                </div>
            </div>
    </main>
    <section id="tecnologias">
        <div class="container pb-5 px-0">
            <div class="row">
                <div class="col-6 col-sm-6 px-0">
                    <h2>Tecnologías de programación</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/javascript.png" alt="">
                    <div class="card-body px-1">
                        <h3 class="card-text">Javascript</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/php.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">PHP</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/html5.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">HTML5</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/react.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">React.js</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/jquery.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">jQuery</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/bootstrap.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">Bootstrap</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/laravel.png" alt="">
                    <div class="card-body px-1">
                        <h3 class="card-text">Laravel</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/mariadb.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">Maria DB</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/css.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">CSS</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/mysql.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">MySQL</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/apache.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">Apache</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/git.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">Git</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/heidisql.png" alt="">
                    <div class="card-body px-1">
                        <h3 class="card-text">Heidi SQL</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/sublimetext.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">Sublime Text</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/xampp.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">XAMPP</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/word.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">Word</h3>
                    </div>
                </div>
                <div class="col-6 col-sm m-1 card">
                    <img class="card-img-top" src="images/excel.png" alt="">
                    <div class="card-body">
                        <h3 class="card-text">Excel</h3>
                    </div>
                </div>
                <div class="col-12 col-sm m-1">
                </div>
            </div>
        </div>
    </section>
    <section id="intereses">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-12 col-sm recuadro mx-2 p-0">
                    <div class="row align-content-end">
                        <div class="col-6 col-sm-3 pr-0 pl-2">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <div class="col-6 col-sm-9 pt-3 px-5">
                            <h4>IDIOMAS</h4>
                            <p class="idiomas">INGLES - Intermediate B2 <br> ESPAÑOL - Nativo <br> FRANCES - Avanzado
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm recuadro mx-2 p-0">
                    <div class="row">
                        <div class="col-6 col-sm-3 pr-0 pl-2">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="col-6 col-sm-9 pt-3 px-5">
                            <h4>HOBBIES</h4>
                            <p class="hobbies">Herreria <br> Juegos Online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experiencia">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 px-5">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12 col-sm shadow mx-2 my-2 pt-2">
                    <div class="row">
                        <div class="col-4 col-sm-4 d-flex justify-content-center">
                            <img src="images/limpieza.jpg" alt="">
                        </div>
                        <div class="col-8 col-sm-8">
                            <h4 style="margin-bottom: 2px;">Vendedor</h4>
                            <h4 style="font-size: 12px; color:#370A6D">Limpieza Tianaran</h4>
                            <p>ENE 2015 - ABR 2016</p>
                            <p>
                            <ul>
                                <li>Analizar ventas</li>
                                <li>Seguimiento de clientes</li>
                                <li>Compras a proveedores</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right pb-3 pr-4">
                            <a href="https://es-la.facebook.com/limpieza.tianaran" target="_blank" class="btn btn-empresa">VER EMPRESA</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm shadow mx-2 my-2 pt-2">
                    <div class="row">
                        <div class="col-4 col-sm-4 d-flex justify-content-center">
                            <img src="images/mascomputacion.png" alt="">
                        </div>
                        <div class="col-8 col-sm-8">
                            <h4 style="margin-bottom: 2px;">Vendedor</h4>
                            <h4 style="font-size: 12px; color:#370A6D">MAS Computación</h4>
                            <p>MAY 2016 - PRESENTE</p>
                            <p>
                            <ul>
                                <li>Analizar ventas</li>
                                <li>Seguimiento de clientes</li>
                                <li>Compras a proveedores</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right pb-3 pr-4">
                            <a href="https://www.mascomputacion.com.ar/" target="_blank" class="btn btn-empresa">VER EMPRESA</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="estudios">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 px-5">
                    <h2><i class="fas fa-graduation-cap"></i> Estudios</h2>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-sm shadow mx-2 my-2 pt-2">
                    <div class="row">
                        <div class="col-6 col-sm-4 d-flex justify-content-center pt-3">
                            <img src="images/depc.png" alt="">
                        </div>
                        <div class="col-6 col-sm-8 pt-3">
                            <h4 style="margin-bottom: 2px;">Programador WEB FULL STACK</h4>
                            <h4 style="font-size: 12px; color:#E20000">DePC</h4>
                            <p>AGO 2020 - PRESENTE</p>
                            <p>
                            <ul>
                                <li>HTML 5</li>
                                <li>CSS 3</li>
                                <li>Bootstrap</li>
                                <li>PHP</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right pb-3 pr-4">
                            <a href="https://depcsuite.com/curso-programacion-web-full-stack/?v=d72a48a8ebd2" target="_blank" class="btn btn-empresa">VER EMPRESA</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm shadow mx-2 my-2 pt-2">
                    <div class="row">
                        <div class="col-6 col-sm-4 d-flex justify-content-center">
                        </div>
                        <div class="col-6 col-sm-8">
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