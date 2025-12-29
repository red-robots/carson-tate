<?php
/**
 * Template Name: Contact
 */
get_header();

$linkedin = get_field('linkedin_url', 'option');
$email_address = get_field('email_address', 'option');
$address = get_field('address', 'option');
$phone = get_field('phone', 'option');
?>

<div id="contact" class="content-area contact-page-template">
  <main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <section class="section-contact-details large-padding no-padding-b">        
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </section>
      <?php if($address || $phone || $linkedin || $email_address): ?>
      <div class="large-padding">
          <div class="contact-intro">
            <h3>Let's <em>connect</em></h3>
          </div>
          <div class="connect_grid">
          <?php if($address || $phone): ?>
            <div class="max-width-xxxsm">
              <div>
                <?php echo $address; ?><br/>
                <a href="tel:<?php echo format_phone_number($phone); ?>" class="phone"><span><?php echo anti_email_spam($phone); ?></span></a>
              </div>
            </div>
          <?php
            endif; 

            if($email_address):
          ?>
          <div class="max-width-xxxsm">
            <div>
              Email us at<br/>
              <a href="mailto:<?php echo anti_email_spam($email_address); ?>" class="fancy_link"><?php echo anti_email_spam($email_address); ?></a>
            </div>
          </div>
          <?php
            endif; 

            if($linkedin):
          ?>
          <div class="max-width-xxxsm">
            <div>
              Follow<br/>
              <a href="https://www.linkedin.com/in/carsontate/" target="_blank" class="display-block fancy_link">on LinkedIn</a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
