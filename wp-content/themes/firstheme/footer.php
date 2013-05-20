        <footer>

        	<div class="footer row-fluid">

            	<div class="container">

					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-one') ) : endif; ?>

    

                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-two') ) : endif; ?>

    

                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-three') ) : endif; ?>

                </div>

            </div>

		</footer>

        <div id="copyright">

        	<div class="container-fluid">

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright') ) : endif; ?>

            </div>

        </div>

        
		<?php google_analytics(); ?>
		

        <?php wp_footer(); ?>
    </body>

</html>