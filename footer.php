 <div id="footer-option">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 margin-btm-20">
                        <div class="footer-col">
                            <h3>CoolBreak</h3>
                           <p class="justificado">
                               Apoyamos  técnicamente a nuestros clientes desarrollando sistemas de gestión, acorde con las necesidades específicas de cada uno de ellos.
                           </p>
                        </div>
                        <div class="space-20"></div>
                    </div><!--col-4 end-->
                    <div class="col-md-4 margin-btm-20 col-sm-12">
                        <div class="footer-col">
                            <div class="space-20"></div>
                            <a href="index.php">
                                <img src="assets/img/logo/coolbreak-bot.png" alt="Logo-CoolBreak">
                            </a>
                        </div>
                    </div><!--latest post col end-->
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-col">
                            <h3>Contacto</h3>
                            <p><i class="ion-iphone"></i><a href="tel:+56954878117"> +56 9 9975 2368</a></p>
                                <p><i class="ion-iphone"></i><a href="tel:+56965030568"> +56 9 8648 1271</a></p>
                                <p><i class="ion-home"></i> Bellavista #368, Providencia</p>
                                <p><i class="ion-social-instagram"></i> <a href="https://www.instagram.com/coolbreakclimatizacionltda/" target="_blank">Instagram</a></p>
                        </div>
                    </div><!--get in touch col end-->
                </div><!--footer main row end-->  
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
