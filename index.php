<?php 

?>
<!DOCTYPE html>
<html lang="en">

<!--PARTE 1 ---------------------------------------------------------------------------------------------->

<head>
    <meta charset="UTF-8">
    <!--llamamos a nuestro archivo css de Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--llamamos a nuestro archivo de java .js que bajamos desde Bootstrap-->
    <script src="js/popper.min.js"></script>
    <!--por http nos conectamos al Framework que permite las conexiones vectoriales y estilos .css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!--llamamos a nuestro archivo css que nos permite mostrar alertas en pantalla para el usuario-->
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <link rel="stylesheet" href="css/estilo.css">

    <link rel="icon" href="img/logo_supermercado.jpg">

    <title>Supermercado FULLMARKET</title>
    <!--Todas los recursos que utilizamos de JavaScript nos referenciamos al final de nuestro
        codigo html -->
</head>

<body>

    <!--PARTE   2    ------------------------------------------------------------------------------------------->
    <header>
        <div>
            <div class="row align-items-stretch justify-content-between pb-5">
                <!-- navbar-expand le indica al navegador que se expanda el menu-->
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <!--definimos nuestro titulo-->
                    <a class="navbar-brand" href="#">Supermercado FULLMARKET</a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <!--dropdown nos permite el menu desplegable y define cada items de nuestro menu
                              dentro de esta clase definimos nuestra tablas, boton vaciar carrito y ir a comprar-->
                            <li class="nav-item dropdown">
                                <!--definimos la altura heigth y anchura de nuestro logocarrito-->
                                <img src="img/logoi.png" class="nav-link dropdown-toggle img-fluid" height="90px"
                                    width="80px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                </img>
                                <span class="cart-count" id="cart-count">0</span>

                                <!--creamos una división para insertar nuestra tabla que mostrara
                                los titulos de nuestra tabla -->
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <!--definimos las 3 columnas-->
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <!--cramos nuestro botones de referencia usando funciones de Bootstrap-->
                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Ir a Comprar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
<div class="container">
     <div id="carousel">
    <div id="carouselExampleIndicators" class="carousel slide m-auto border-bottom border-dark py-5"
      data-bs-ride="carousel" style="max-width: 100%;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active "
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="img/imageBanner1.png" class="d-inline-flex m-1" width="233px" height="170px" alt="...">
          <img src="img/computacion.png" class="d-inline-flex  m-1"  width="233px" height="170px"  alt="...">
          <img src="img/jardineria.png" class="d-inline-flex  m-1" width="233px" height="170px" alt="...">
          <img src="img/lineaBlanca.png" class="d-inline-flex m-1" width="233px" height="170px"
            alt="...">
        </div>
        <div class="carousel-item ">
          <img src="../Assets/img/pizza_cuadrada-slide2.jpeg" class="d-inline-flex  m-1" width="233px" height="170px"
            alt="...">
          <img src="../Assets/img/pizza_slide2.jpg" class="d-inline-flex  m-1" width="233px" height="170px" alt="...">
          <img src="../Assets/img/pizzatofuceliacos_slide2.jpg" class="d-inline-flex  m-1" width="233px" height="170px"
            alt="...">
          <img src="../Assets/img/rebanada_slide2.png" class="d-inline-flex  m-1" width="233px" height="170px"
            alt="...">
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!-- End Carousel -->
        </div>
    </header>
    <main>
        <!--fijamos nuestro titulo centra entre los margeens-->
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <!--display indica el tamaño y mt-4 deja un margen arriba del titulo-->
            <h1 class="display-4 mt-4">Lista de Productos</h1>
        </div>
        <!--definimos nuestro contener que contendra la lista de productos
            incluyendo la foto y caracteristicas de cada uno.-->
        <div class="container" id="lista-productos">

            <div class="card-deck mb-3 text-center">
                <!--md 4 deja un espacio de titulo y shadow-sm es un estilo de sombra
                arriba de la etiqueta card-header-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <!--difinimos el titulo del producto-->
                        <h4 class="my-0 font-weight-bold">ACEITE</h4>
                    </div>
                    <!--para cada producto definimos una tarjeta de presentacion-->
                    <div class="card-body">
                        <img src="img/aceite.jpg" class="card-img-top">
                        <!--definimos un card-title de tamaño grande para mostrar el precio-->
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1200</span></h1>

                        <!--definimos nuestra lista con las caracteristicas de cada producto
                            con 3 caracteristicas como lista NO Ordenada-->
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>1 Litro</li>
                            <li>Marca Chef</li>
                            <li>Unidad</li>
                        </ul>
                        <!--referenciamos nuestro boton +Agregar-->
                        <!--definimos la clase agregar-carrito que llamaremos despues desde el archivo carrito.js-->
                        <!--data-id ="1" corresponde al codigo interno de nuestro producto  -->
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1" onclick="addToCart()"> +Agregar</a>
                    </div>
                </div>

                <!--la estrutura anterior correspondiente a las clase
                    <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                    se repiten exactamente igual para cada imagen que quieran ir agregando,
                    nuestro poryecto de aprendizaje considera 9 magenes.
                    hacen copiar y pegar de este codigo y listo
                -->

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">TALLARINES </h4>
                    </div>
                    <div class="card-body">
                        <img src="img/tallarines.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">700</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Cabello de Angel</li>
                            <li>Bolsa 400 gramos</li>
                            <li>Unidad</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2"onclick="addToCart()">+Agregar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">DETERGENTE</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/detergente.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">14000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Detergente OMO</li>
                            <li>Pack detergente líquido</li>
                            <li>Pack</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3" onclick="addToCart()">+Agregar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SILLA</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/silla.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">9000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Silla Terraza</li>
                            <li>Material Ratan</li>
                            <li>Unidad</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4" onclick="addToCart()">+Agregar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">MESA</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/mesa.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">15000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Mesa Exterior</li>
                            <li>Material Plástico</li>
                            <li>unidad</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5" onclick="addToCart()">+Agregar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">MACETERO</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/macetero.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">2599</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Macetero Rustico4 GB RAM</li>
                            <li>Medidas 40x30 cm</li>
                            <li>Material Arcilla</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6" onclick="addToCart()">+Agregar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CELULAR</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/celular.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">65000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Marca ALFA</li>
                            <li>Pantalla 12 pixel</li>
                            <li>Diseño simétrico</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7" onclick="addToCart()">+Agregar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">IMPRESORA</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/impresora.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">120000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Impresora NEXT</li>
                            <li>Tonner Color</li>
                            <li>Multifuncional</li>
                            <li>Conexión Inalambrica</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8" onclick="addToCart()">+Agregar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">NOTEBOOK</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/dell.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">250000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>1 TB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9" onclick="addToCart()">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--FOOTER---->
    <Div class="Footer" <Div align='center'>
        <br>
        <p>CADENA SUPERMERCADOS FULLMARKET</p>
        <p>Dirección: Los alamos 4567</p>
        <p>Teléfono +78 - 456 78 90</p>
        <P>Contacto Ventas: ventas@fullmarket.com</P>
    </Div>
    <!--referencia a nuestro codigo java que descargamos desde Bootstrap-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
    <!-- <script src="js/helpers.js"></script> -->
    <script>
        // borrarContadorCarrito();
    </script>


</body>

</html>
