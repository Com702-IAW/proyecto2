@extends('layouts.app6')

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
 <body>

<section id="testimonials-4" class="section" data-stellar-background-ratio="0.5">
</section>

<section id="section-agregar" class="section" data-stellar-background-ratio="0.5">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        <div class="col-md-6">
            <label for="email" class="col-md-4 control-label">Componente</label>
            <input id="email" type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Agregar Componente
                </button>
            </div>
        </div>
    </form>
</section>

<section id="section-eliminar" class="section" data-stellar-background-ratio="0.5">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">

        <div class="col-md-6">
            <label for="email" class="col-md-4 control-label">E-Mail</label>
            <input id="email" type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Eliminar Componente
                </button>
            </div>
        </div>
    </form>
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
</body>