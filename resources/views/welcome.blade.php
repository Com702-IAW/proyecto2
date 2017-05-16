<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Home</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
                <!-- Estilo Propio -->
        <link href="css/estilo1.css" rel="stylesheet" id="linkestilo">
        <!-- Bootstrap -->
        <!-- Estilo Propio -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid panel-arriba">
            <nav class="navbar navbar-default barra-arriba">
                <img class="pull-left" src ="src/logo.png"/>
                <div class="container-fluid" >
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
							<div>
								<button id = "resetear" >Resetear Pedido </button>
							</div>
                            <li>
                                <img src ="src/carrito.png" alt="Imagen Carro de Compas"/>
                                <h1 class="texto-fuerte" id="carrito">Items: 0 </h1>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="container">
            <div class="row well">

                <!-- Lugar donde va la imagen que describe el producto -->
                <div class="col-md-7 col-xs-12">
                    <a class="thumbnail col-xs-12" id="panelgeneral">
                        <div>
                            <img id="imagen0" src="src/pregunta.png" />
                            <img id="imagen3" src="src/pregunta1.png" />
                        </div>
                        <div>
                            <img id="imagen1" src="src/pregunta1.png" />
                            <img id="imagen2" src="src/pregunta1.png" />
                        </div>
                        <div id = "preciototal"></div>
                    </a>
                </div>

                <!-- Lugar donde van los componentes para personalizar el producto -->
                <div class="col-md-5 col-xs-12">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" id = "monitor">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse0">Monitor</a>
                                </h4>
                            </div>
                            <div id="collapse0" class="panel-collapse collapse">
                            </div>
                            <div class="panel-heading" id ="teclado">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">Teclado</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                            </div>
                            <div class="panel-heading" id ="mouse">
                         <!--      <img src ="src/mousemicro.png" align = "right"/> -->
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse2">Mouse</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                            </div>
                            <div class="panel-heading" id ="parlantes">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse3">Parlantes</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Contact us form -->
                    <div class="col-md-4 col-xs-12">
                        <div class="headline">
                            <h3>CONTACT US</h3>
                        </div>
                        <hr />
                        <div class="content">
                            <p>
                                Bahía Blanca, CP 8000<br />
                                Av. Alem 1253<br />
                                Phone: +54 702 101924<br />
                                Fax: +54 702 103003<br />
                                Email: com702@iaw2017.com
                            </p>
                        </div>
                    </div>
                    <!-- Go social -->
                    <div class="col-md-4 col-xs-12">
                        <div class="headline">
                            <h3>GO SOCIAL</h3>
                        </div>
                        <hr />
                        <div class="content">
                            <p>
                                Get in toach with us:
                                <a class="texto-link" href ="http://cs.uns.edu.ar/~dcm/iaw/">http://cs.uns.edu.ar/~dcm/iaw/ </a>
                            </p>
                            <p>
                                <a href="https://www.facebook.com/manuel.rios.374"><img src="src/facebook.png" alt="Logo Facebook" /></a>
                                Manuel Rios
                            </p>
                            <p>
                                <a href="https://www.facebook.com/Constanza.morillo"><img src="src/facebook.png" alt="Logo Facebook" /></a>
                                Constanza Morillo
                            </p>

                        </div>
                    </div>
                    <!-- Subscibe -->
                    <div class="col-md-4 col-xs-12">
                        <div class="headline">
                            <h3>CAMBIA TU ESTILO</h3>
                        </div>
                        <hr />
                        <div class="content">
                            <p>
                                <a class="texto-link" href="#" id="estilo1" >Estilo 1 </a>
                            </p>
                            <p>
                                <a class="texto-link" href="#" id="estilo2" >Estilo 2 </a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/modeloComponentes.js"></script>
        <script type="text/javascript" src="js/vistaComponentes.js"></script>
        <script type="text/javascript" src="js/controlador.js"></script>
         Include all compiled plugins (below), or include individual files as needed
        <script src="js/bootstrap.min.js"></script>-->

    </body>
</html>
