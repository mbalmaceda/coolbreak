        <header class="header-main">
              <div class="top-bar">

                <div class="container">
                    <ul class="info list-inline pull-left hidden-xs">
                        <li>
                            <a href="contacto@climatizacioncoolbreak.cl" class="hover-color"><i class="ion-ios-email-outline"></i> contacto@climatizacioncoolbreak.cl</a>
                        </li>
                        
                    </ul>  
                    <div class="pull-right">
                        <ul class="info list-inline hidden-xs">
                           <li><i class="ion-iphone"></i> +56 9 54878117</li>
                        </ul>
                    </div>
                </div><!--container end-->
            </div><!--topbar end-->
            <div class="navbar navbar-inverse sticky-nav sticky" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img id="logo" src="assets/img/logo/coolbreak-top.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li <?php if ($pageName=='inicio') {echo 'class="active"';} ?> >
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle js-activated <?php if ($pageName=='servicios' || $pageName=='transporte') {echo 'active-dropdown';} ?>" data-toggle="dropdown">Servicios</a>
                                <ul class="dropdown-menu">
                                    <li><a href="climatizacion.php">Climatización</a></li>
                                    <li><a href="calefaccion.php">Calefacción</a></li>
                                    <li><a href="electricidad.php">Electricidad</a></li>
                                    <li><a href="transporte_logistica.php">Transporte y Logistica</a></li>                            
                                </ul>
                            </li>
                            <li <?php if ($pageName=='ventas') {echo 'class="active"';} ?> >
                                <a href="ventas.php">Ventas</a>
                            </li>
                            <li <?php if ($pageName=='proyectos') {echo 'class="active"';} ?>>
                                <a href="proyectos.php">Proyectos</a>
                            </li>
                            <li <?php if ($pageName=='contacto') {echo 'class="active"';} ?> >
                                <a href="contacto.php" >Cotización</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-->
            </div><!--navigation end-->
        </header><!--header main end-->