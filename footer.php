 <div id="footer-option">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 margin-btm-20">
                        <div class="footer-col">
                            <h3>CoolBreak</h3>
                           <p class="justificado">
                               Apoyamos  técnicamente a nuestros clientes desarrollando sistemas de gestión, acorde con las necesidades específicas de cada uno de ellos.
                           </p>
                        </div>
                        <div class="space-20"></div>
                    </div><!--col-4 end-->
                    <div class="col-md-4 margin-btm-20">
                        <div class="footer-col">
                            <h3>Siguenos</h3>
                            <ul class=" list-inline social-btn">
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Siguenos en Facebook"></i></a></li>
                            </ul>
                        </div>
                    </div><!--latest post col end-->
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h3>Contacto</h3>
                            <?php if ($pageName=='ventas') { ?>
                                <p><i class="ion-person"></i> Juan Rojas Loyola</p>
                                <p><i class="ion-iphone"></i><a href="tel:+56954878117"> +56 9 54878117</a></p>
                                <p><i class="ion-ios-home-outline"></i><a href="tel:0232160313 "> 023 2160313 </a></p>
                                <p><i class="ion-email"></i><a href="mailto:jrojas@climatizacioncoolbreak.cl"> jrojas@climatizacioncoolbreak.cl</a></p>
                            <?php } elseif ($pageName=='contacto') { ?>
                                <p><i class="ion-person"></i> Victor Troncoso Rios</p>
                                <p><i class="ion-iphone"></i><a href="tel:+56965030568"> +56 9 65030568</a></p>
                                <p><i class="ion-ios-home-outline"></i><a href="tel:0232160313 "> 023 2160313 </a></p>
                                <p><i class="ion-email"></i><a href="mailto:vtroncoso@climatizacioncoolbreak.cl"> vtroncoso@climatizacioncoolbreak.cl</a></p>
                            <?php } elseif ($pageName=='transporte') { ?>
                                <p><i class="ion-person"></i> Claudio Eyzaguirre Orellana</p>
                                <p><i class="ion-iphone"></i><a href="tel:+56959340480"> +56 9 59340480</a></p>
                                <p><i class="ion-ios-home-outline"></i><a href="tel:0232160313 "> 023 2160313 </a></p>
                                <p><i class="ion-email"></i><a href="mailto:ceyzaguirre@climatizacioncoolbreak.cl"> ceyzaguirre@climatizacioncoolbreak.cl</a></p>
                            <?php } elseif ($pageName=='proyectos') { ?>
                                <p><i class="ion-person"></i> Cristian Jeldres Lagos</p>
                                <p><i class="ion-iphone"></i><a href="tel:+56959340480"> +56 9 59340480</a></p>
                                <p><i class="ion-ios-home-outline"></i><a href="tel:0232160313 "> 023 2160313 </a></p>
                                <p><i class="ion-email"></i><a href="mailto:cjeldres@climatizacioncoolbreak.cl"> cjeldres@climatizacioncoolbreak.cl</a></p>
                            <?php } else { ?>
                                <p><i class="ion-iphone"></i><a href="tel:+56954878117"> +56 9 54878117</a></p>
                                <p><i class="ion-iphone"></i><a href="tel:+56965030568"> +56 9 65030568</a></p>
                                <p><i class="ion-email"></i> <a href="mailto:contacto@climatizacioncoolbreak.cl">contacto@climatizacioncoolbreak.cl</a></p>
                            <?php } ?>
                                <p><i class="ion-home"></i> Pasaje Milonga #1819, Maipú</p>
                        </div>
                    </div><!--get in touch col end-->
                </div><!--footer main row end-->  
                <div class="row">
                    <div class="col-md-12 text-center footer-bottom">
                        <a href="index.php"> <img src="assets/img/logo/coolbreak-bot.png" width="130px" alt=""></a>
                        <div class="space-20"></div>
                        <span>&copy;2015. Todos los derechos reservados. Desarrollado por <a href="http://www.itdesign.cl">It&amp;Design</a></span>
                    </div>
                </div><!--footer copyright row end-->
            </div><!--container-->
        </div><!--footer main end-->
        <!--scripts-->
        <!--scripts-->
        <script src="assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="assets/js/parallax.min.js" type="text/javascript"></script>
        <script src="assets/js/wow.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="assets/js/contact_me.js" type="text/javascript"></script>
        <?php 
            if ($scriptAdd !=null) {
               foreach ($scriptAdd as $key => $value) {
                   echo $value;
               }
            }
         ?>
    </body>
</html>
