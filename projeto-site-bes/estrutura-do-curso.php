<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylecomplementar.css">
    <link rel="stylesheet" href="css/css/css/bootstrap.css">
    <link rel="stylesheet" href="css/css/styles.css">
    <link rel="shortcut icon" href="uepa.ico">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <title>Engenharia de Software | Estrutura </title>
</head>

<body>

    <ul>
        <li> <img src="img/uepa-escudo80.png" alt="Logo da uepa" img-responsive img-centered> </li>

        <li><a href="https://www.uepa.pa.gov.br/">Site da Instituição</a></a>
        </li>
        <li><a href="http://ccnt.uepa.br/">Site do Centro de Ciencias Naturais e Tecnologia </a></a>
        </li>


    </ul>
    <header>
        <img src="img/logo-curso.png" alt="">
    </header>
    <?php 
     include("menu.php");
     ?>

    <main>
        <div class="container-fluid">
            <!-- slider -->
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Aluno.jfif" class="d-block w-100" alt="Grade Curricular">

                        <!-- tirar classe d-none -->

                        <div class="carousel-caption d-md-block">
                            <h2>Deseja conhecer a nossa Grade Curricular?</h5>
                                <p>Conheça as materias que vão ajudar você a ser o melhor profissional possível</p>
                                <a href="gradecurricular.php" class="main-btn">Ver </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Professor.jpg" class="d-block w-100" alt="Corpo Docente">
                        <div class="carousel-caption d-md-block">
                            <h2>Deseja conhecer a nosso Corpo Docente?</h5>
                                <p>Nossa equipe de vai ajudar você a ser o melhor profissional possível</p>
                                <a href="corpo-docente.php" class="main-btn">Ver</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/visao-frontal-terreo-min.jpg" class="d-block w-100" alt="Manutenção em software">
                        <div class="carousel-caption d-md-block">
                            <h2>Conheça nossa história</h5>
                                <a href="historia.php" class="main-btn">Ver</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </main>


    <footer>

        <div class="container-center ">
            <ul class="social " id="asssbora ">
                <li><a href="https://pt-br.facebook.com/UepaOficial/">Facebook</a></li>
                <li><a href="https://twitter.com/uepa_pa">Twitter</a></li>
                <li>
                    <a href="https://www.youtube.com/user/ascomuepa">YouTube</a>
                </li>
                <li>
                    <a href="https://www.flickr.com/photos/biuepa/">Flickr</a>
                </li>
            </ul>
        </div>
        <div id="copy-area" class="coxinhadefrango">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido por <a href="#" target="_blank">Ruan Felipe, Eduardo Oliveira, Ana Caroline</a> &copy; 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>