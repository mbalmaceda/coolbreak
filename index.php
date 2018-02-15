<?php include_once('head.php'); ?>

<?php $pageName = "inicio"; ?>

<?php include_once("header.php"); ?>
        <!--bootstrap carousel slider start-->
        <!-- Carousel
        ================================================== -->

        <div class="home-slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="assets/img/slider/slider-asd-1.png" alt="...">
                        <div class="carousel-caption slider-wrapper-3">
                            <h3 class="animated fadeInDown delay-3">Crea un agradable ambiente</h3>
                            <p class="animated fadeInDown delay-4">Conoce nuestros proyectos de climatización</p>
                            <p class=""><a href="proyectos.php" class=" btn theme-btn-default btn-lg btn-small animated fadeInLeft delay-5">Ver mas</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/slider/sliderd.png" alt="...">
                        <div class="carousel-caption slider-wrapper-3">
                            <h3 class="animated fadeInDown delay-3">Pioneros en Climatización</h3>
                        </div>
                    </div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
        </div><!--home-slider-->
        <!--carousel slider end-->
        <div class="space-30"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow animated fadeInUp">
                    <h2>Cool Break</h2>
                    <h3 class="subtitle">Pioneros en Climatización</h3>
                </div>
                <div class="space-30"></div>
                <div class="col-md-4 col-xs-6">
                    <div class="services-box wow animated fadeInLeft" data-wow-delay="0.3s">
                        <i class="ion-ios-snowy"></i>
                        <h1>Climatización</h1>
                    </div>
                </div><!--services box-->
                <div class="col-md-4 col-xs-6">
                    <div class="services-box wow animated fadeInLeft" data-wow-delay="0.5s">
                        <i class="ion-thermometer"></i>
                        <h1>Calefacción</h1>
                    </div>
                </div><!--services box-->
                <div class="col-md-4 col-xs-12">
                    <div class="services-box wow animated fadeInLeft" data-wow-delay="0.7s">
                        <i class="ion-flash"></i>
                        <h1>Electricidad</h1>
                    </div>
                </div><!--services box-->
            </div><!--row end-->
        </div><!--intro with services end-->
        <div class="space-70"></div>
        <section id="content-region-1" class="padding-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 features wow animated fadeInLeft servicios-index" data-wow-delay="0.3s">
                        <h3>Servicios de Climatización</h3>
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-ios-home"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Instalación</h4>
                                <p>Instalamos equipos de distintas capacidades y variados modelos.</p>
                            </div>
                        </div><!--services list-->
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-settings"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Reparación</h4>
                                <p>
                                   Reparación en general de distintas capacidades y modelos de equipos.
                                </p>
                            </div>
                        </div><!--services list-->
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-ios-loop-strong"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Mantención</h4>
                                <p>
                                    Mantencion en general para las distintas capacidades y modelos de equipos
                                </p>
                            </div>
                        </div><!--services list-->
                    </div>
                    <div class="col-md-5 wow animated fadeInRight servicios-index" data-wow-delay="0.5s">
                        <img src="assets/img/prueba-2.png" class="img-responsive img-rounded" alt="">
                    </div>
                </div>
                <div class="space-30"></div>
            </div><!--container-->
        </section><!--features end-->
        <?php $scriptAdd = array(''); ?>
        <?php include_once('footer.php'); ?>
