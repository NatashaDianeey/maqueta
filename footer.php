
		        </main><!-- end.Main -->

		        <footer>
					<div class="container-fluid">
						<div class="row white">
							<div class="col-md-2 col-sm-12 col-xs-12">
								<img class="logoGamol-footer" src="img/assets/gamol.png">
							</div>
							<div class="col-md-2 col-sm-12 col-xs-12">
								<ul>
									<li class="liFooter"><a href="agencia" target="_blank">Agencia</a></li>
									<li class="liFooter"><a href="" target="_blank">Servicios</a></li>
									<li class="liFooter"><a href="" target="_blank">Proyectos</a></li>
									<li class="liFooter"><a href="sumate" target="_blank">Súmate</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-12 col-xs-12">
								<ul>
									<li class="liFooter"><a href="" target="_blank">Soporte técnico</a></li>
									<li class="liFooter"><a href="blog" target="_blank">Blog</a></li>
									<li class="liFooter"><a href="contacto" target="_blank">Contacto</a></li>
									<li class="liFooter"><a href="" target="_blank">Aviso de privacidad</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="textFooter">
									<p>Av. Horacio No.1844, piso 10 Esq.Periférico, Col. Los Morales Polanco,C.P.11510,México DF, tel. +52 (55) 5262 9393 | 01800 00 GAMOL (42665) | contacto@gamol.com.mxg.</p> 									<p>Gamol © 2016 Todos los derechos reservados.</p>
								</div>
							</div>
							<div class="col-md-2 col-sm-12 col-xs-12">
								<img class="logoCmmi" src="img/assets/cmmi_blue.png">
							</div>
			        	</div>
		          	</div>
		        </footer>
			</div><!-- /content-wrap -->
		</div><!-- /containerPrincipal -->


        <script src="<?php echo get_template_directory_uri(''); ?>js/vendor/jquery-2.1.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(''); ?>js/vendor/jquery-2.1.4.min.js"><\/script>')</script>
        <!-- JS/ B o o t s t r a p -->
        <script src="<?php echo get_template_directory_uri(''); ?>js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/bootstrap/npm.js"></script>
        <!-- JS/F o u n d a t i o n -->
        <!-- <script src="<?php echo get_template_directory_uri(''); ?>js/vendor/what-input.min.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/foundation/foundation.min.js"></script> -->
        <!-- JS/B a s i c o s -->
        <script src="<?php echo get_template_directory_uri(''); ?>js/vendor/jquery.easing.1.3.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins/jquery.bxslider.min.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins/classie.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(''); ?>js/main.js"></script>
        <?php if(isset($_GET['sec']) && $_GET['sec'] != '') { ?><!-- Si es igual al nombre de página -->
        <script src="<?php echo get_template_directory_uri(''); ?>js/scripts/<?php echo $_GET['sec'].'.js'; ?>"></script>
        <?php } else { ?>
        <script src="<?php echo get_template_directory_uri(''); ?>js/scripts/default.js"></script>

        <?php } ?><!-- ScriptCustom -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>