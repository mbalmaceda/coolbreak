<?php include_once('head.php'); ?>
<?php $pageName = 'contacto'; ?>
<?php include_once('header.php'); ?>
<section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                    Contáctanos
                </h3>
            </div>
        </section><!--page-tree end here-->
        <!--google map-->
        <!--<div id="map-canvas"></div>-->
        <!--google map end-->
        <div class="space-70"></div>
        <div class="container">
            <div class="col-md-5">
                <h4 class="heading-mini">Cotiza tus productos o servicios</h4>
                <p>Móvil: <a href="tel:+56999752368">+56 9 9975 2368</a><br>
                    <a href="tel:+56986481271">+56 9 8648 1271</a></p>
                <p>Fijo: <a href="tel:0228810571">02 28810571</a></p>
                <p>Email: <a href="mailto:contacto@climatizacioncoolbreak.cl">contacto@climatizacioncoolbreak.cl</a></p>
                <p>Dirección: Bellavista #368, Providencia</p>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <h4 class="heading-mini">Cotizar</h4>
                <div class="my-contact-form">
                    <form name="sentMessage" id="contactForm" method="post" action="assets/mail/contact_me.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <input type="text" class="form-control" placeholder="Nombre*" id="name" required data-validation-required-message="Por favor ingresa tu nombre">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">                   
                                        <input type="email" class="form-control" placeholder="Email*" id="email" required data-validation-required-message="Por favor ingresa tu email">
                                        <p class="help-block"></p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" class="form-control" placeholder="Asunto" id="phone">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls">
                                <textarea rows="5" class="form-control" placeholder="Mensaje*" id="message" required data-validation-required-message="Por favor ingresa un mensaje"></textarea>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12 text-right" style="margin-top: -15px;">
                                <button type="submit" class="btn theme-btn-color btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--contact page end-->
        <div class="space-70"></div>
<?php $scriptAdd = array('<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>',
						 '<script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(-33.5124387, -70.7832927);

                var mapOptions = {
                    zoom: 16,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

                var contentString = \'<p style="line-height: 20px;"><strong>Banzhow Template</strong></p><p>123 My Street, Banzhow City, CA 4567</p>\';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: \'Cool Break\'
                });

                google.maps.event.addListener(marker, \'click\', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, \'load\', initialize);
        </script>
				' ); ?>
<?php include_once('footer.php'); ?>