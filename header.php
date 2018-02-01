        <header class="header-main">
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
                                </ul>
                            </li>
                            <li <?php if ($pageName=='productos') {echo 'class="active"';} ?> >
                                <a href="productos.php">Productos</a>
                            </li>
                            <li <?php if ($pageName=='proyectos') {echo 'class="active"';} ?>>
                                <a href="proyectos.php">Proyectos</a>
                            </li>
                            <li <?php if ($pageName=='contacto') {echo 'class="active"';} ?> >
                                <a href="contacto.php" >Contacto</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-->
            </div><!--navigation end-->
        </header><!--header main end-->