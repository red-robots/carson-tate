	</div><!-- #content -->

  <?php echo get_template_part('pre-footer'); ?>

	<footer class="site-footer" role="contentinfo">			
    <?php
      $logo = get_field('logo', 'option');
      $linkedin = get_field('linkedin_url', 'option');
      $email_address = get_field('email_address', 'option');
      $logo_footer = ($logo) ? $logo['url'] : get_template_directory_uri().'/images/logo-footer.svg';
    ?>
		<div class="wrapper large-padding">
      <div class="footer-inner">
        <div class="footer-brand">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $logo_footer; ?>" alt="">
          </a>
        </div>
        <div class="footer-columns">
          <?php if ( has_nav_menu( 'footer' ) ) { ?>
            <nav class="footer-navigation footer-list" role="navigation">
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
          <?php if($linkedin || $email_address): ?>
            <div class="footer-list socials">
              <ul>
                <?php if($linkedin): ?>
                  <li><a href="<?php echo $linkedin; ?>" target="_blank">LinkedIn</a></li>
                <?php endif; ?>
                <?php if($email_address): ?>
                  <li><a href="<?php echo anti_email_spam($email_address); ?>" target="_blank">Email</a></li>
                <?php endif; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="footer-credits large-padding">
      <div class="footer-credits-grid">
        <div class="footer-credits-text">Bellaworks</div>
        <nav class="footer-credits-nav" role="navigation">
          <?php
            wp_nav_menu(
              array(
                'menu'  => 'privacy-menu',
                'menu_class'  => 'privacy-menu-wrapper'
              )
            );
          ?>
        </nav>
      </div>
    </div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
