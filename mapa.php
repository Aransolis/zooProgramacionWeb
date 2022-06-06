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
                            <div class="carousel-item active">
                                <img src="images/IMG2.jpg" class="d-block w-100" alt="imagen2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/IMG3.jpg" class="d-block w-100" alt="imagen3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/IMG4.jpg" class="d-block w-100" alt="imagen4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
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
                <h1>Mapa de Ubicación</h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.2572334941424!2d-101.6526458850648!3d21.18193798591563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bb91fbc1cf1f1%3A0xf56ed9c8b1481bc9!2sParque%20Zool%C3%B3gico%20de%20Le%C3%B3n!5e0!3m2!1sen!2smx!4v1646018305156!5m2!1sen!2smx"
                    width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


            </div>
            <div class="col">
                <aside>
                    <div class="card">
                        <img src="images/atracciones.jpg" class="card-img-top" alt="imgagen card">
                        <div class="card-body">
                            <h2>Dirección</h2>
                            <p>Camino a Ibarrilla KM 6 37207 León, Guanajuato</p>
                            <a href="https://wa.me/524291229954"> <img src="iconos/wp.png" class="card-img-top"
                                    alt="whatsapp icon"></a>
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
</body>

</html>