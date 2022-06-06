<?php 
require_once('class/zoologico.class.php');
$sliders = $zoologico->getAllSlider();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div id="wrapper" class="container">
        <div class="row">
            <div class="col">
                <header>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach($sliders as $slider):?>
                            <div class="carousel-item <?php if($slider['prioridad']===1): echo "active"; endif;?>">
                                <a target="_blank" href="<?php echo $slider['url'];?>"> <img src="<?php echo $slider['imagen']?>" class="d-block w-100" alt="imagen2"></a>
                            </div>
                            <?php endforeach;?>
                        </div>
                    
                    </div>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Atracciones
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="acuario.php">Acuario</a></li>
                                        <li><a class="dropdown-item" href="safari.php">Safari</a></li>
                                        <li><a class="dropdown-item" href="sky.php">Sky Zoo</a></li>
                                        <li><a class="dropdown-item" href="zonatren.php">Zona Tren</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="costo.php">Costos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="mapa.php">Mapa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="contenido" class="row">
            <div class="col-8">
                <section>
                    <h2>Sobre Zoologico</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium magnam ut rerum quae minima
                        veniam pariatur et debitis, minus neque asperiores deleniti laudantium, eaque dolorum saepe
                        quibusdam sed eum iusto!</p>
                </section>
                <img src="images/parque.jfif" class="card-img-top" alt="...">

            </div>
            <div class="col">
                <aside>
                    <div class="card" style="width: 18rem;">
                        <img src="images/Leon1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">León</h5>
                            <p class="card-text">El león es un gran felino del género Panthera originario de África y la
                                India. Tiene un cuerpo musculoso y de pecho profundo, cabeza corta y redondeada, orejas
                                redondas y un mechón peludo al final de la cola. Es sexualmente
                                dimórfico; los leones machos adultos son más grandes que las hembras y tienen una melena
                                prominente.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <footer>
            <div class="row">
                <div class="col-3">
                    <h3>Enlaces Rapidos</h3>
                    <nav id="menu_inferior">
                        <ul>
                            <li> <a href="atencion.php">Atencion Cliente</a></li>
                            <li> <a href="facturacion.php">Facturación</a> </li>
                            <li> <a href="PDF/reglamento.pdf">Reglamento</a></li>
                            <li> <a href="admin/login.php">Login</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-3">
                    <h3>contacto</h3>

                </div>
                <div class="col-6">
                    <h3>Redes Sociales</h3>
                    <ul id="navlist">
                        <li id="iconofb">
                            <a href="https://www.facebook.com/">&nbsp;</a>
                        </li>

                        <li id="iconotw">
                            <a href="https://twitter.com/?lang=en/">&nbsp;</a>
                        </li>

                        <li id="iconoin">
                            <a href="https://www.instagram.com/">&nbsp;</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p>Camino a Ibarrilla KM 6 37207 León, Guanajuato</p>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/cf6a1ce200.js" crossorigin="anonymous"></script>
</body>

</html>