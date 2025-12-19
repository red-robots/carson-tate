	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">			
		<div class="wrapper">
      <div class="footer-inner">
        <?php if ( has_nav_menu( 'footer' ) ) { ?>
        <nav class="footer-navigation" role="navigation">
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'footer',
                'menu_class'      => 'footer-menu-wrapper',
                'container_class' => 'footer-menu-container'
              )
            );
          ?>
        </nav>
        <?php } ?>
      </div>
      </div>
    </div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->

</body>
</html>
