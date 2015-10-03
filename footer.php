        <footer class="site-footer wrap clearfix">
            <section class="footer-sec-lg">
                <h5><span>Stay in the Know</span></h5>
                <?php 
                if( function_exists( 'mc4wp_form' ) ) {
				    mc4wp_form();
				}
				?>
            </section>
            <section class="footer-sec-sm">
                <h5><span>Take us on the Go</h5>
                <a class="button" id="iphone-app" href="https://itunes.apple.com/us/app/invibed-business-news-personal/id977513471?mt=8">iPhone</a>
                <a class="button" id="android-app" href="https://play.google.com/store/apps/details?id=me.dwnld.qnq868">Android</a>
            </section>
            <section class="footer-sec-sm">
                <h5><span>Connect With Us</h5>
                <div class="social-invibed">
                    <a href="http://www.facebook.com/invibed" target="blank"><span class="fa fa-facebook social-links"></span></a>
                    <a href="https://instagram.com/outvibed/" target="blank"><span class="fa fa-instagram social-links"></span></a>
                    <a href="http://twitter.com/invibed" target="blank"><span class="fa fa-twitter social-links"></span></a>
                    <a href="http://invibed.com/feed/" target="blank"><span class="fa fa-rss social-links" target="blank"></span></a>
                </div>
            </section>
        </footer>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/project.js"></script>
		<?php wp_footer(); ?>
</body>
</html>