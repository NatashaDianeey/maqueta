
        </main><!-- end.Main -->

        <footer>

        </footer><!-- end.Footer -->
        		</div>
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
        <script>
		    function init() {
		        window.addEventListener('scroll', function(e){
		            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		                shrinkOn = 10,
		                header = document.querySelector("header");
		            if (distanceY > shrinkOn) {
		                classie.add(header,"smaller");
		            } else {
		                if (classie.has(header,"smaller")) {
		                    classie.remove(header,"smaller");
		                }
		            }
		        });
		    }
		    window.onload = init();
		</script>
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