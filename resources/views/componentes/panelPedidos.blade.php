@extends('layouts.app7')
@extends('layouts.app3')


<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<body>

<section id="testimonials-4" class="section" data-stellar-background-ratio="0.5">
</section>

<section id="section-about">

    <!--hacer modal-->
    <div class="container" style= "background:white">

        <div class="container" style= "background:white">

            <div class="row well" style= "background:white">

                <div class="col-md-5 col-xs-12" style="text-align:center">

                    <h1>Mis pedidos</h1>
                    <table id="tabla">  <!--hacer un js onda controlador para cargar todos los pedidos-->
                        <tr><th>Pedido</th></tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

</section>

    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row align-center copyright">
                    <div class="col-sm-12">
                        <p>&copy; GREEN Theme</p>
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
                            -->
                            <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
     <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/vistaComponentes.js"></script>
    <script type="text/javascript" src="js/controlador.js"></script>
    <script type="text/javascript" src="js/carrito.js"></script>
</body>